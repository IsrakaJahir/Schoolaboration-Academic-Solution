<?php
$conn = mysqli_connect('localhost','root','','schoolaboration');
session_start();
$file_id=$_SESSION['file_id'];
$folder_id=$_SESSION['folder_id'];
$file_path=$_SESSION['file_path'];
$folder_path=$_SESSION['folder_path'];
echo $folder_id;
echo $file_id;
echo $file_path;
echo $folder_path;
echo $_SESSION['folder_name'];


$sql1 = "DELETE FROM folder WHERE folder_id=?";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("i", $folder_id);
$stmt1->execute();
$stmt1->close();

// Delete records from the 'files' table
$sql2 = "DELETE FROM files WHERE folder_id=?";
$stmt2 = $conn->prepare($sql2);
$stmt2->bind_param("i", $folder_id);
$stmt2->execute();
$stmt2->close();

$dir=$folder_path;
// Function to recursively delete a directory and its contents
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }

    return rmdir($dir);
}

// ...

// Remove the folder and its contents from the file system
if (file_exists($dir)) {
    deleteDirectory($dir);
}












// Redirect back to the original page after deletion
header('Location:youfolder.php');
exit;
?>
