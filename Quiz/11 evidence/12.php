<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Create a PHP script to upload a particular type of file to the server and limit the file size to 400 KB (File type can be PDF/IMAGE/Document file).</h3>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx">
  <input type="submit" value="Upload File">
</form>
</body>
</html>