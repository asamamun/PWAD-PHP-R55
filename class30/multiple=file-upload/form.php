<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Upload</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
/*     var_dump($_FILES['files']);
    exit; */
    $fileCount = count($_FILES['files']['name']);
    
    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileError = $_FILES['files']['error'][$i];
        $fileType = $_FILES['files']['type'][$i];
        
        // Handle the file upload process here
        // You can move the file to a desired directory, save information to a database, etc.
        // Here's a simple example to move the uploaded files to a directory named "uploads"
        $targetDir = 'uploads/';
        $targetFile = $targetDir . time()."_".$fileName;
        
        if ($fileError === UPLOAD_ERR_OK) {
            move_uploaded_file($fileTmpName, $targetFile);
            echo "File '$fileName' uploaded successfully.<br>";
        } else {
            echo "Error uploading file '$fileName'. Error code: $fileError.<br>";
        }
    }
}
?>

<form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="submit" value="Upload">
    </form>
</body>
</html>