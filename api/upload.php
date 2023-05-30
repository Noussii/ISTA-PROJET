<?php

echo 'hello from upload php'.'<br>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if (isset($_FILES["emploiPdf"]) && $_FILES["emploiPdf"]["error"] == UPLOAD_ERR_OK) {
        $tempFile = $_FILES["emploiPdf"]["tmp_name"];
        $targetPath = "../resources/pdf/emploi_du_temps"; // Specify the target folder where the file will be saved

        // Generate a unique filename for the uploaded file
        $targetFile = $targetPath . uniqid() . ".pdf";

        // Move the temporary file to the target location
        if (move_uploaded_file($tempFile, $targetFile)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    }
}