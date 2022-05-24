抓取 https://madou.club/ 视频网站视频工具

php 脚本使用方法：
````
php .\dump.php https://madou.club/hongkongdoll-单人集-独自练习.html
php .\dump.php https://madou.club/hongkongdoll-%e5%8d%95%e4%ba%ba%e9%9b%86-%e7%8b%ac%e8%87%aa%e7%bb%83%e4%b9%a0.html
````
php 版本及模块情况：
````
PS C:\Users\Jimh.Tsin\PhpstormProjects\aes> php -v
PHP 7.2.1 (cli) (built: Jan  4 2018 04:00:25) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2017 Zend Technologies
PS C:\Users\Jimh.Tsin\PhpstormProjects\aes> php -m
[PHP Modules]
bcmath
bz2
calendar
Core
ctype
curl
date
dom
exif
fileinfo
filter
gd
gettext
gmp
hash
iconv
imap
intl
json
ldap
libxml
mbstring
mysqli
mysqlnd
openssl
pcre
PDO
pdo_mysql
pdo_pgsql
pdo_sqlite
pgsql
Phar
readline
Reflection
session
shmop
SimpleXML
soap
sockets
sodium
SPL
sqlite3
standard
tidy
tokenizer
wddx
xml
xmlreader
xmlrpc
xmlwriter
xsl
zip
zlib

[Zend Modules]
````
抓取完文件存储位置:
````
C:\Users\Jimh.Tsin\PhpstormProjects\aes (master)
λ ls -lhtr "2022-05-24 12_49_36\ts\
total 101M
-rw-r--r-- 1 Jimh.Tsin 197609 1.1M  5月 24 20:54 index0.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index1.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.2M  5月 24 20:54 index2.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index3.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index4.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index5.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index6.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index7.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index8.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index9.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index10.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index11.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index12.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index13.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index14.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index15.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index16.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index17.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index18.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index19.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.2M  5月 24 20:54 index20.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index21.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index22.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.2M  5月 24 20:54 index23.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index24.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index25.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index26.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index27.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index28.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index29.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index30.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index31.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.2M  5月 24 20:54 index32.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index33.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index34.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index35.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index36.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index37.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index38.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index39.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index40.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index41.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index42.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index43.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index44.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index45.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index46.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index47.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index48.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index49.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index50.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index51.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index52.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index53.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index54.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index55.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index56.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index57.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index58.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index59.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index60.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index61.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index62.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index63.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index64.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index65.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.5M  5月 24 20:54 index66.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index67.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index68.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.4M  5月 24 20:54 index69.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index70.ts
-rw-r--r-- 1 Jimh.Tsin 197609 1.3M  5月 24 20:54 index71.ts
-rw-r--r-- 1 Jimh.Tsin 197609 880K  5月 24 20:54 index72.ts
-rw-r--r-- 1 Jimh.Tsin 197609 817K  5月 24 20:54 index73.ts
-rw-r--r-- 1 Jimh.Tsin 197609 889K  5月 24 20:54 index74.ts
-rw-r--r-- 1 Jimh.Tsin 197609 709K  5月 24 20:54 index75.ts
-rw-r--r-- 1 Jimh.Tsin 197609 881K  5月 24 20:54 index76.ts
-rw-r--r-- 1 Jimh.Tsin 197609 868K  5月 24 20:54 index77.ts
-rw-r--r-- 1 Jimh.Tsin 197609 814K  5月 24 20:54 index78.ts
-rw-r--r-- 1 Jimh.Tsin 197609 256K  5月 24 20:54 index80.ts
-rw-r--r-- 1 Jimh.Tsin 197609 620K  5月 24 20:54 index79.ts
-rw-r--r-- 1 Jimh.Tsin 197609 255K  5月 24 20:54 index81.ts
-rw-r--r-- 1 Jimh.Tsin 197609 285K  5月 24 20:54 index82.ts
-rw-r--r-- 1 Jimh.Tsin 197609  66K  5月 24 20:54 index83.ts
-rw-r--r-- 1 Jimh.Tsin 197609 2.6K  5月 24 21:09 index.m3u8
````
抓取完毕用 Native HLS Playback 插件本地播放
````
Chrome native-hls
https://chrome.google.com/webstore/detail/native-hls-playback/emnphkkblegpebimobpbekeedfgemhof
Firefox native-hls
https://addons.mozilla.org/en-US/firefox/addon/native_hls_playback/
````