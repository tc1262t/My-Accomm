<?php
//Get the background image from the imagesB folder
$image = ImageCreateFromPng ("imagesB/Captcha/capstring.png");

#Red variable will generate random integer
$red = rand(80,130);

$green = rand(80,130);
$blue = 320 - $red - $green;
$textColour = ImageColorAllocate($image, $red, $green, $blue);

# Generate an array for character
$stringValues = array('A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','U','V','W','X','Y','Z','6','7','8','9');

//Randomise the order of characters
shuffle($stringValues);

$captchaString = $stringValues[0];
for ($g=1; $g<5; $i++) $stringValues .= ' ' . $stringValues[$g];

# Edit and output the image
$xAxis = rand(3,18);
$yAxis = rand(3,18);

//Create the image for Captcha


ImageString($image, 5, $xAxis, $yAxis, $captchaString, $textColour);
//Dimensions of Captcha
$Image = imagecreatetruecolor(200, 80);
imagecopyresized ($Image, $image, 0, 0, 0, 0, 200, 80, 100, 40);
header("Content-Type: image/jpeg");
Imagejpeg($Image, NULL, 8);

//Need to remove last image in order 
//to create a new Captcha string
ImageDestroy($image);
ImageDestroy($Image);
?>