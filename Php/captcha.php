<?php
session_start();

header("Content-type: image/png");

$image = imagecreate(200, 50);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
$captchaText = genererCaptcha();
$_SESSION['captcha'] = $captchaText;

imagestring($image, 5, 30, 15, $captchaText, $text_color);
imagepng($image);
imagedestroy($image);

function genererCaptcha($length = 6) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captchaText = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $captchaText .= $characters[rand(0, $charactersLength - 1)];
    }
    return $captchaText;
}
