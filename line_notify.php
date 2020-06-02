<?php

require_once 'vendor/autoload.php';

/*
การส่งข้อความด้วย Line notify
*/

$token = "Ogti7vf0yCMR5FkqwXvYC2toD6WKR9UCmFITlH9b0fI";
$ln = new KS\Line\LineNotify($token);
/*
$text = 'สวัสดีประเทศไทย';
$ln->send($text);

//HTTP or HTTPS image path
$image_path = 'https://loremflickr.com/g/320/240/paris'; //Line notify allow only jpeg and png file
$ln->send($text, $image_path);
*/

#https://devdocs.line.me/files/sticker_list.pdf
$text = 'ที่นี้ประเทศไทย';
$sticker = ['stickerPackageId' => '4', 'stickerId' => '289'];
$ln->send($text, null, $sticker);

?>