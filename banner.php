<?php

$filename = "image.png";
header("Content-Type: image/png");

$image_p = imagecreatetruecolor(200, 200);
$image = imagecreatefrompng($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, 200, 200, 20000, 20000);

$image_p = imagecrop($image_p, ["x" => 0, "y" => 50, "width" => 200, "height" => 100]);

imagepng($image_p, null, 0);

?>