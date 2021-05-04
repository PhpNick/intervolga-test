<?php

$old_img_path = "./img.jpg";
$new_img_path = "./smallimg.jpg";
$width_orig = 20000;
$height_orig = 20000;
$new_width = 200;
$new_height = 100;

$ratio_orig = $width_orig/$height_orig;

if ($new_width/$new_height > $ratio_orig) {
   $new_width = $new_height*$ratio_orig;
} else {
   $new_height = $new_width/$ratio_orig;
}
$t = imagecreatefromjpeg($old_img_path);
$s = imagecreatetruecolor($new_width, $new_height);
$x = imagesx($t);
$y = imagesy($t);
imagecopyresampled($s, $t, 0, 0, 0, 0, $new_width, $new_height, $x, $y);
imagejpeg($s, $new_img_path);
?>
<img src="./smallimg.jpg" alt="">