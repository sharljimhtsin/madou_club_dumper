<?php
/*
 * need sodium & openssl & curl & pcre module
 *
 * */

require_once "aes.php";
require_once "curl.php";

echo "start\n";
//https://madou.club/hongkongdoll-%e5%8d%95%e4%ba%ba%e9%9b%86-%e7%8b%ac%e8%87%aa%e7%bb%83%e4%b9%a0.html
$homeUrl = $argv[1];
$page1 = curl($homeUrl);
// get shareUrl
preg_match('/https:\/\/dash\.madou\.club\/share\/\w+/', $page1, $shareUrl);
$page2 = curl($shareUrl[0], $homeUrl);
// get token
preg_match('/var token = "[A-Za-z0-9_\-\.]+";/', $page2, $token);
$tokenStr = substr($token[0], 13);
$tokenStr = substr($tokenStr, 0, strlen($tokenStr) - 2);
// get m3u8 playlist and AES key and AV poster
preg_match('/\/videos\/\w+\/index\.m3u8/', $page2, $m3u8Url);
$keyUrl = str_replace("index.m3u8", "ts.key", $m3u8Url[0]);
$posterUrl = str_replace("index.m3u8", "poster.jpg", $m3u8Url[0]);
$m3u8Url = $m3u8Url[0];
// download key & poster in new dir
$hostName = "https://dash.madou.club";
$dirName = date("Y-m-d H_i_s");
if (!file_exists($dirName)) {
    mkdir($dirName);
}
file_put_contents($dirName . "/poster.jpg", file_get_contents($hostName . $posterUrl));
file_put_contents($dirName . "/ts.key", file_get_contents($hostName . $keyUrl));
// download m3u8 file
$m3u8Data = curl($hostName . $m3u8Url . "?" . http_build_query(["token" => $tokenStr]), $homeUrl);
file_put_contents($dirName . "/index.m3u8", $m3u8Data);
preg_match_all('/index\d+\.ts/', $m3u8Data, $tsFiles);
// download the ts files to ts dir one by one
mkdir($dirName . "/ts");
foreach ($tsFiles[0] as $i => $ts) {
    $tsUrl = str_replace("poster.jpg", $ts, $posterUrl);
    $tmpFile = fopen($dirName . DIRECTORY_SEPARATOR . "ts" . DIRECTORY_SEPARATOR . $ts, "w+");
    curl($hostName . $tsUrl, $homeUrl, true, $tmpFile);
    fclose($tmpFile);
    echo $ts . " downloaded\n";
}
// decrypt AES with key
$key = file_get_contents($dirName . DIRECTORY_SEPARATOR . "ts.key");
foreach ($tsFiles[0] as $i => $ts) {
    $path = $dirName . DIRECTORY_SEPARATOR . "ts" . DIRECTORY_SEPARATOR . $ts;
    $tsData = file_get_contents($path);
    $msg = sodium_bin2base64($tsData, SODIUM_BASE64_VARIANT_ORIGINAL);
    $data = decrypt_openssl($msg, $key);
    file_put_contents($path, $data);
    echo $ts . " decrypted\n";
}

echo "OK";

