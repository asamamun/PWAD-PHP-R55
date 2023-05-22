<?php
// Set the path to your source image and destination image
$sourceImage = 'path/to/source/image.jpg';
$destinationImage = 'path/to/destination/image.jpg';

// Load the source image
$image = imagecreatefromjpeg($sourceImage);

// Apply filters (e.g., grayscale)
imagefilter($image, IMG_FILTER_GRAYSCALE);

// Add text overlay
$text = 'Hello, World!';
$font = 'path/to/font.ttf'; // Set the path to your desired font file
$fontSize = 24;
$textColor = imagecolorallocate($image, 255, 255, 255); // Set the text color (white in this example)
$textPositionX = 10;
$textPositionY = 10;

imagettftext($image, $fontSize, 0, $textPositionX, $textPositionY, $textColor, $font, $text);

// Compress and save the image
imagejpeg($image, $destinationImage, 80); // The last argument (80) determines the image quality (0-100)

// Free up memory
imagedestroy($image);
?>
