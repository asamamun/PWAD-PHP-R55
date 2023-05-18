<?php
// check or create dummy database

if (isset($_POST['upload'])) {
    $f = $_FILES['file'];

    $allowedImages = array("image/jpeg", "image/gif", "image/png", "image/webp");
    $allowedPDFs = array("application/pdf");

    if (in_array($f['type'], $allowedImages)) {
        if ($f["size"] <= (1024 * 1024)) {
            $name = rand(10000, 99999) . "_" . time() . ".jpg";
            move_uploaded_file($f['tmp_name'], "files/" . $name);
            $message = "Image upload complete";
        } else {
            $message = "The image file size should be less than 1MB";
        }
    } elseif (in_array($f['type'], $allowedPDFs)) {
        if ($f["size"] <= (5 * 1024 * 1024)) {
            $name = rand(10000, 99999) . "_" . time() . ".pdf";
            move_uploaded_file($f['tmp_name'], "files/" . $name);
            $message = "PDF upload complete";
        } else {
            $message = "The PDF file size should be less than 5MB";
        }
    } else {
        $message = "Sorry, only image and PDF files are allowed";
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h4><?= $message ?? "File Upload"; ?></h4>
    <div class="container">
        <form class="row g-3" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Image or PDF</label>
                <input class="form-control" type="file" id="formFile" name="file" required accept="image/*,application/pdf">
            </div>
            <div class="mb-3">
                <input class="btn btn-outline-primary" type="submit" name="upload" value="Upload">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
