
<?php
session_start();
global $folder_id,$folder_name;
$folder_id=$_SESSION['folder_id'];
$folder_name=$_SESSION['folder_name'];



?>

<?php
// Check if the form is submitted and the file is uploaded
if (isset($_POST['upload_btn']) && isset($_FILES['uploaded_file'])) {
    $file_name = $_FILES['uploaded_file']['name'];
    $file_tmp = $_FILES['uploaded_file']['tmp_name'];

    // Move the uploaded file to a desired location on your server
    $upload_directory = "Folders/$folder_name/"; // Replace with your desired directory path
    $file_path = $upload_directory . $file_name;
    if (move_uploaded_file($file_tmp, $file_path)) {

        // Connect to the database
        $conn = mysqli_connect('localhost','root','','schoolaboration');

        // Read the file data
        $file_data = file_get_contents($file_path);

        // Prepare and execute the SQL query to insert the file data and path into the database
        // Assuming you have already defined $file_name, $file_path, $folder_id, and $_SESSION['phone']

// Prepare and execute the SQL query to insert the file data and path into the database
$stmt = $conn->prepare("INSERT INTO files(file_name, file_path, folder_id, user_phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $file_name, $file_path, $folder_id, $_SESSION['phone']);
$stmt->execute();


        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo "File uploaded and inserted into the database successfully.";
        } else {
            echo "Failed to upload and insert the file into the database.";
        }

        // Close the database connection and the statement
        $stmt->close();
        $conn->close();
    } else {
        echo "Failed to move the uploaded file.";
    }
}
?>
