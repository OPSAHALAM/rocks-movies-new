<?php
// Check if the 'file' parameter is set in the URL
if(isset($_GET['file'])) {
    $filename = basename(urldecode($_GET['file']));
    $filepath = 'movies/' . $filename; // 'movies/' is the folder where you store the files

    // Check if the file exists
    if (file_exists($filepath)) {
        // Set headers for the file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));

        // Clear output buffer and read the file to the browser
        ob_clean();
        flush();
        readfile($filepath);
        exit;
    } else {
        echo "Error: The file does not exist.";
    }
} else {
    echo "Error: No file specified.";
}
?>