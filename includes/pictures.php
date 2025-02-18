<!DOCTYPE html>
<html>
<head>
    <title>Display Files</title>
</head>
<body>
    <h2>Uploaded Files</h2>
    <?php
    // Replace 'username', 'password', 'database_name', and 'files_table' with your actual database credentials and table name
$conn = mysqli_connect('localhost','root','','schoolaboration');

    $query = "SELECT * FROM files WHERE folder_id = 0"; // Replace 'folder_id' with the column that stores folder IDs in your 'files_table'
    $stmt = $conn->prepare($query);
    // $stmt->bind_param("i", $folder_id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $file_name = $row['file_name'];
        $file_path = $row['file_path'];

        // Determine file type
        $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        // Display images
        if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
            echo "<img src='$file_path' alt='$file_name'><br>";
        }

        // Display PDFs
        if ($file_extension === 'pdf') {
            echo "<iframe src='$file_path' width='500' height='600' style='border: 1px solid black;'></iframe><br>";
        }


        if ($file_extension === 'txt') {
            echo "<iframe src='$file_path' width='500' height='600' style='border: 1px solid black;'></iframe><br>";
        }
        if ($file_extension === 'docx') {
            echo "<iframe src='$file_path' width='500' height='600' style='border: 1px solid black;'></iframe><br>";
        }
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
