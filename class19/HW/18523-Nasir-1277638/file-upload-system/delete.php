<?php
if (isset($_GET['n'])) {
    $fileName = $_GET['n'];
    $imagePath = "uploads/images/" . $fileName;
    $pdfPath = "uploads/pdfs/" . $fileName;

    // Check if the file exists in the image directory
    if (file_exists($imagePath)) {
        // Attempt to delete the image file
        if (unlink($imagePath)) {
            echo "Image file deleted successfully.";
            header("location: index.php");
        } else {
            echo "Unable to delete the image file.";
        }
    }
    // Check if the file exists in the PDF directory
    elseif (file_exists($pdfPath)) {
        // Attempt to delete the PDF file
        if (unlink($pdfPath)) {
            echo "PDF file deleted successfully.";
            header("location: index.php");
        } else {
            echo "Unable to delete the PDF file.";
        }
    } else {
        echo "File not found.";
    }
} else {
    echo "Invalid request.";
}
?>
