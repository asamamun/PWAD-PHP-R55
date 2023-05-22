<?php
class ImageLib{
    public static function resize($source,$destination,$new_width=640,$new_height=480){
// Set the path to your source image and destination image
$sourceImage = $source;
$destinationImage = $destination;

// Set the desired dimensions for the resized image
$newWidth = $new_width; // New width in pixels
$newHeight = $new_height; // New height in pixels

// Set the desired image quality (0-100)
$imageQuality = 80;

// Load the source image
$image = imagecreatefromjpeg($sourceImage);

// Get the original image dimensions
$originalWidth = imagesx($image);
$originalHeight = imagesy($image);

// Calculate the aspect ratio of the original image
$originalAspectRatio = $originalWidth / $originalHeight;

// Calculate the dimensions of the resized image while maintaining the aspect ratio
if ($newWidth && !$newHeight) {
    $newHeight = $newWidth / $originalAspectRatio;
} elseif ($newHeight && !$newWidth) {
    $newWidth = $newHeight * $originalAspectRatio;
} elseif (!$newWidth && !$newHeight) {
    $newWidth = $originalWidth;
    $newHeight = $originalHeight;
}

// Create a new image with the desired dimensions
$resizedImage = imagecreatetruecolor($newWidth, $newHeight);

// Resize the image using the calculated dimensions
imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

// Save the resized and compressed image
imagejpeg($resizedImage, $destinationImage, $imageQuality);

// Free up memory
imagedestroy($image);
imagedestroy($resizedImage);
    }
}

?>
