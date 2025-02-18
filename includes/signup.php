<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous">
        
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
 
    <style>
        .content{
            width: 50%;
            float: left;
        }
        .main{
           height: 643px;
           width: 50%;
           background-color: white;
           float: right;
           margin: 0;
           padding: 0;
           border-top-left-radius: 50px;
           border-bottom-left-radius: 50px;
        }
        body{
           
            background-color: lavender;
        }
        h1 {
            
            text-align: center;
            font-size: 30px;
           margin-top: 50px;
           font-weight: 300;
           letter-spacing: 0.1rem;
           font-family: serif;
       }
       h5{
        text-align: center;
        font-weight: 300;
           letter-spacing: 0.1rem;
           color: gray;
           font-style: italic;
           font-size: 15px;
       }
       input{
        font-size: 16px;
        font-family: serif;
        border-top: none;
        border-right: none;
        border-left: none;
        width: 400px;
        letter-spacing: 0.1rem;
        padding-top: 30px;
        border-color: lightgray;
    }
    

    </style>
    <meta charset="UTF-8">
   
    <title>signup</title>

</head>
<body>
    <div class="content">
        <img src="images/logo.png" style="height:80px; width: 150px;">
    <h2 style="margin-left: 50px;margin-top: 140px; font-size: 30px; font-family: Bookman old style; font-weight: 600;letter-spacing: 0.1rem; color: darkmagenta;">One app to<br>manage all the </h2>
        <h3 style="margin-left:50px; font-size: 40px; font-family: Bookman old style; letter-spacing: 0.1rem;">academic needs</h3>
        <h4 style="margin-left: 150px; font-family: bookman old style; font-size:15px; font-style: italic; color: dimgrey; font-weight: 300;">Digital platform to manage all your tasks</h4></div>
    <div class="main">
<h1>Create an account</h1>
<h5>Let's get started with your schoolaboration account</h5>
<br>
<form method="post">
<div class="formbox"style="margin-top:20px; margin-left: 150px">
         <input type="text" placeholder="Name" id="name" name="name"><br><br>
        <input type="text" placeholder="Email"id="email" name="email"><br><br>
        <input type="text" placeholder="Phone number" id="phone" name="phone"><br><br>
        <input type="text" placeholder="Password  "  id="pass1" name="password"><br><br>
            
        </div>
        <button class="loginbutton" name="signup" type="submit" onclick="validate()"  style="margin-top: 50px; height: 35px; width:400px; margin-left:150px; border-radius: 15px; font-family:serif; font-size: 17px; letter-spacing:0.1rem; background-color: paleturquoise; border: none;"> Create account</button><br>
        <p style="margin-left: 340px;">OR</p>
        <button class="loginbutton" type="submit" onclick="validate()" style="height: 35px; width:400px; margin-left:150px; border-radius: 15px; font-family:serif; font-size: 17px; letter-spacing:0.1rem; background-color: paleturquoise; border:none;"> <i class="fa-brands fa-google fa-bounce" style="color: blue"></i> Sign up with google </button>
      </form>
              </div>

              <?php
      global $conn;
      $conn = mysqli_connect('localhost', 'root', '', 'schoolaboration');

if (isset($_POST['signup'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $profile_picture='images/profile/usericon.svg';
    
    // Create a prepared statement
    $sql = "INSERT INTO user_info (name, email, phone, password,profile_picture) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ssiss", $name, $email, $phone, $password,$profile_picture);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo("<script LANGUAGE='JavaScript'>
                window.alert('Successful');
                window.location.href='login.php';
            </script>");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

        ?>

</body>
</html>