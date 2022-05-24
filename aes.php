<?php

/**
 * @param $payload
 * @param $key
 * @return false|string
 */
function decrypt_openssl($payload, $key)
{
    $raw = base64_decode($payload);
    $iv_size = openssl_cipher_iv_length('AES-128-CBC');
    $iv = substr($raw, 0, $iv_size);
    $data = substr($raw, $iv_size);
    return openssl_decrypt($data, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
}


/**
 * @param $msg
 * @param $key
 * @param $iv
 * @return string
 * @deprecated
 */
function encrypt_openssl($msg, $key, $iv = null): string
{
    $iv_size = openssl_cipher_iv_length('AES-128-CBC');
    if (!$iv) {
        $iv = openssl_random_pseudo_bytes($iv_size);
    }
    $encryptedMessage = openssl_encrypt($msg, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode($iv . $encryptedMessage);
}