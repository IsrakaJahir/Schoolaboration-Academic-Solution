<?php



$conn = mysqli_connect('localhost','root','','schoolaboration');



if(isset($_POST['add_course'])&& isset($_FILES['file'])){


    $course_id = $_POST['c_id'];
  
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $upload_directory = "images/admin_image/"; // Replace with your desired directory path
    $file_path = $upload_directory . $file_name;
    if (move_uploaded_file($file_tmp, $file_path)) {
      $file_data = file_get_contents($file_path);

        $insert = "INSERT INTO course_material(course_id, coursefile_path) 
       VALUES('$course_id','$file_path')";

        $upload = mysqli_query($conn,$insert);

        if($upload){

            $message[] = 'new product added successfully';
        }
        else{
            $message[] = 'could not add the product';
        }
    }

};

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE p_id= $id");

};

header("Location: add_coursematerial.php");
    exit();
?>