<?php
session_start();


$conn = mysqli_connect('localhost','root','','schoolaboration');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
     
          
                    $newFolderName = $_POST['folderName'];
                     mkdir("Folders/$newFolderName");
                     $foldername = $_POST['folderName'];
             $filepath = 'Folders/' . $newFolderName;
               

                    $insert = "INSERT INTO folder(folder_name,user_phone,folder_path) 
                     VALUES('$foldername','{$_SESSION['phone']}','$filepath')";

        $upload = mysqli_query($conn,$insert);
         unset($_POST['submit']);

   
    header("Location: note_storage.php");
    exit(); // Important: Make sure to exit to prevent further script execution.
}
?>
