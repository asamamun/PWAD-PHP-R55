<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
/* $conn = new mysqli("localhost","root","","r55_php") or die("Cannot connect to DB");
$conn->set_charset("utf8"); */

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "r55_php";

try {
    // Create a new mysqli object
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    // Set the character set to UTF-8
    $conn->set_charset("utf8");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

function createExcerpt($description, $maxLength) {
    // Remove any HTML tags from the description
    $description = strip_tags($description);
    
    // Trim the description to the maximum length
    $excerpt = substr($description, 0, $maxLength);
    
    // Append "..." if the description was truncated
    if (strlen($description) > $maxLength) {
        $excerpt .= "...";
    }
    
    return $excerpt;
}
?>
