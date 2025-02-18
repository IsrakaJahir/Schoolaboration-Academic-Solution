<?php
session_start();
$to_mail=$_SESSION['email'];
  if(isset($_POST['add_friend'])){
    $f_phone = $_POST['friends'];

    $conn = mysqli_connect('localhost', 'root', '', 'schoolaboration');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sqlSelect = "SELECT name, phone, email FROM user_info WHERE phone = ?";
    $stmtSelect = $conn->prepare($sqlSelect);
    $stmtSelect->bind_param("s", $f_phone);
    $stmtSelect->execute();
    $stmtSelect->bind_result($retrievedname, $retrievedphone, $retrievedemail);
    $stmtSelect->fetch();
    $stmtSelect->close();

    if (!empty($retrievedname)) {
        // Assuming you want to insert data into the 'friends' table
        $from_mail = $to_mail; // Replace with the actual sender's email
        $to_mail = $retrievedemail;

        $sqlInsert = "INSERT INTO friends (fri_name, email, phone, from_mail, to_mail, confirm) VALUES (?, ?, ?, ?, ?, 0)";
        $stmtInsert = $conn->prepare($sqlInsert);
        $stmtInsert->bind_param("sssss", $retrievedname, $retrievedemail, $retrievedphone, $from_mail, $to_mail);
        $stmtInsert->execute();
        $stmtInsert->close();
    }

    mysqli_close($conn); // Close the database connection
}
  header("Location: dashboard.php");
    exit();
?>