<?php
$conn = mysqli_connect('localhost','root','','schoolaboration');
session_start();
$file_id=$_SESSION['file_id'];
$folder_id=$_SESSION['folder_id'];
$file_path=$_SESSION['file_path'];
echo $folder_id;
echo $file_id;
echo $file_path;

// Assuming you have a connection to the database set up already

    // Perform database operations to delete folder data based on the folder ID
    // For example, use a prepared statement to avoid SQL injection

    // Replace 'folders' with your actual table name
    $sql = "DELETE FROM files WHERE folder_id = ? and file_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $folder_id,$file_id);
    $stmt->execute();
    $stmt->close();

    // Assuming you have retrieved the file path from the database
    // Replace 'your_folder_path' with the actual folder path
    $folderPath = $file_path;

    // Remove the folder and its contents from the file system
    if (file_exists($folderPath)) {
        // Recursive removal to delete all files and subdirectories
        // Use with caution to avoid unintended data loss
       unlink($file_path);
     }


// Function to recursively delete a directory and its contents


// Redirect back to the original page after deletion
header('Location:filess.php');
exit;
?>
