<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous">  
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Login</title>
    <style>
        body{
            background-color: lavender;
        }
    .left{
    height: 530px;
    width: 50%;
    float: left;
}
.right{
    width: 50%;
    height: 640px;
    float: left;
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    text-align: center;
    background: white; 
    box-shadow: 2px 4px 10px 2px #888888;
}
.username{
    width: 350px;
    height: 30px;
    font-size: 15px;
}
.password{
    width: 350px;
    height: 30px;
    font-size: 15px; 
}
.signinbutton{
    width: 58%;
    height: 32px;
    border-radius: 50px;
    color: black;
    background: linear-gradient(270deg, rgba(87, 157, 228, 0.55) 0%, rgba(74, 153, 208, 0.38) 99.99%, rgba(50, 147, 172, 0.00) 100%);
    border: none;
    cursor: pointer;
    font-family: "Bookman Old Style";
    font-size: 100%;
    color: white;
    margin-left: 15px;
}
.forgetpass{
   float: right;
   margin-right: 27%;
}

font{
    margin-top: 20px;
    font-size: 25px;
    color: #78787e;
    font-family: Comic Sans MS;
    letter-spacing: 0.1rem;
}

    input{
        font-size: 16px;
        font-family: serif;
        border-top: none;
        border-right: none;
        border-left: none;
        width: 380px;
        letter-spacing: 0.1rem;
        padding-top: 30px;
        border-color: lightgray;
}
.user{
    color: #78787e;
    font-family: "Bookman Old Style";
}
a{
    text-decoration: none;
}
h5{
        text-align: center;
        font-weight: 300;
           letter-spacing: 0.1rem;
           color: gray;
           font-style: italic;
           font-size: 15px;
       }
    </style>
</head>
<body>
    <div class="left">
        <img src="images/logo.png" style="height:60px; width: 150px;">
    <h2 style="margin-left: 50px;margin-top: 140px; font-size: 30px; font-family: Bookman old style; font-weight: 600;letter-spacing: 0.1rem; color: darkmagenta;">One app to<br>manage all the </h2>
        <h3 style="margin-left:50px; font-size: 40px; font-family: Bookman old style; letter-spacing: 0.1rem;">academic needs</h3>
        <h4 style="margin-left: 150px; font-family: bookman old style; font-size:15px; font-style: italic; color: dimgrey; font-weight: 300;">Unlock your potential with our app</h4>
        </div>
<div class="right">
    
    <img src="images/giphy.gif" style="height: auto; width: 420px; margin-left: 18px; margin-top: 10px; ">
    <h5>Please Log In to your schoolaboration account.</h5>
    <form method="POST">  
     <div class="formbox"style=" margin-left: 10px">
     
        <input class="username" type="text" id="username" placeholder="Email" name="name"><br><br>
    <input class="password" type="text" id="password"placeholder="Password" name="password"><br><br>   
        </div>
    <a class="forgetpass" href="#">Forget Password?</a><br><br>
     <button class="signinbutton" name="login" type="submit" style="color: black">Log in </button><br><br>
     <br>Don't have an account?
     <a href="signup.php">Create Account</a>
 </form> 
</div>
</div>


<?php
        $conn = mysqli_connect('localhost','root','','schoolaboration');

global $conn;
    if(isset($_POST['login'])){
            $name = $_POST["name"];
            $password = $_POST["password"];
            $_SESSION["status"] = false;

            //condition for checking valid input from user
            $sql = " Select * from user_info where name='$name' AND password='$password' ";
            $result = mysqli_query($conn, $sql);
            $row_num = mysqli_num_rows($result);
            $data = mysqli_fetch_assoc($result);

            if ($row_num == 1) {
                $_SESSION["status"] = true;
                $phone = $data['phone'];
                $email = $data['email'];
                $profile_picture=$data['profile_picture'];
                $_SESSION["phone"] = $phone;
                $_SESSION['nam'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['profile_picture']=$profile_picture;
                echo("<script LANGUAGE='JavaScript'>
    window.alert('Login successful');
    window.location.href='dashboard.php';
    </script>");
            } else {
                echo("<script LANGUAGE='JavaScript'>
    window.alert('Invalid');
    window.location.href='login.php';
    </script>");
            }
    }
        ?>



</body>
</html>