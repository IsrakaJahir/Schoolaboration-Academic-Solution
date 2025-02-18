<?php
session_start();
error_reporting(0);
$phone=$_SESSION['phone'];
$to_mail=$_SESSION['email'];
$nam=$_SESSION['nam'];
$profile_picture=$_SESSION['profile_picture'];
$conn = mysqli_connect('localhost', 'root', '', 'schoolaboration');

?>
<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  
  <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous"></script>
  <style>
  *{
  margin-top: 0;
  margin-bottom: 0;
  margin-right: 0;
  margin-left: 0;
  box-sizing: border-box;

}
.col {
  display: block;
  float: left;
  height: 650px;
  box-sizing: border-box;
}

.col-3 {
  width: 29%;
  float: right;
  font-family: serif;
  border-left: 1px solid lightgray;
}
.col-1{
  width: 15%;
 position: fixed;
}
.col-2 {
  width: 55%;
  margin-left: 15%;
 
}

.col-1 a{
  text-decoration: none;
  color: rgba(0, 0, 0, 0.65);
  font-family: serif;
  font-weight: 400;
}

li a{
  
  display: block;
  padding: 13px;
}
li a:hover {
  background-color: #e8eaed;
}
li{
  list-style-type: none;
   
}

.row-2{
  margin-top: 5%;
}
.input-icons i {
            position: absolute;
        }
         
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
         
        .icon {
            padding: 20px;
            min-width: 40px;
        }
         
        .input-field {
            width: 100%;
            padding: 8px;
            text-align: center;
            border-radius: 10px;
            opacity: 0.5;
            background: rgba(185, 147, 214, 0.23);
            border: none;
        }
        input{
          margin-top: 12px;
          
        }


      .profile{
  right: 10px;
  float: right;
  height: 350px;
  width: 300px;
  top: 10%;
  position: absolute;
  box-sizing: border-box;
  background-color: beige;
  border:  solid black 1px;
  display: none;
}
.popup{
  
  width: 500px;
  height: 400px;
  background-color: white;
  position: absolute;
  border-radius: 6px;
  top: 0;
  left:50%;
  transform: translate(-50%,-50%) scale(0.1);
  text-align: center;
  visibility: hidden;
  transition: transform 0.4s,top 0.4s;
  font-size: 20px; 

}

.open-popup{

visibility: visible;
top: 50%;
transform: translate(-50%,-50%) scale(1);

}
.popup button{
 width: 70px;
 margin-top: 50px;
 padding: 10px 0;
 background: rgb(218,227,243);
 color: black;
 border:0px;
 outline: none;
 font-size: 18px;
 border-radius: 4px;
 cursor: pointer;

}
.popup_text{


margin-top:10%;

}
.popup_up{
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 500px;
            height: 400px;
        }

        /* Style for the close button */
        .popup_up-close {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }
        .sidenav {
          height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  border-radius: 10px;
background: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-left: 1px solid gray;
}

.sidenav a {
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  transition: 0.3s;
  padding-top: 15px;
  padding-left: 10px;
}

.sidenav input{
  font-size: 15px;
  width: 350px;
  height: 30px;
  margin-left: 10px;
  margin-top: 15px;
  border-radius: 10px;
  opacity: 0.5;
  background:rgba(185, 147, 214, 0.23);
  display: block;
  transition: 0.3s;
  border: none;
  font-family: serif;
}
.sidenav a:hover {
  color: steelblue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 20px;
  font-size: 36px;
  margin-left: 60px;
}
.requestButton {
          height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  border-radius: 10px;
background: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
  border-left: 1px solid gray;
}

.requestButton  a {
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  transition: 0.3s;
  padding-top: 15px;
  padding-left: 10px;

}

.requestButton  input{
  font-size: 15px;
  width: 350px;
  height: 30px;
  margin-left: 10px;
  margin-top: 15px;
  border-radius: 10px;
  opacity: 0.5;
  background:rgba(185, 147, 214, 0.23);
  display: block;
  transition: 0.3s;
  border: none;
  font-family: serif;
}
.requestButton  a:hover {
  color: steelblue;
}

.requestButton .closebutton {
  position: absolute;
  top: 0;
  right: 20px;
  font-size: 36px;
  margin-left: 60px;
}



      </style>
</head>
<body>
  <div>
  <div class="col-1 col" style="background: rgba(140, 166, 219, 0.80);">
    <img src="images/logo.png" style="width: 160px; height:60px" >
    <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:10px;">Menu</h3>

  <ul>
    <li><a href="dashboard.php"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
  <li><a href="note_storage.php"><i class="fa fa-sticky-note-o fa-beat"> </i> Note Storage</i></a></li>
  <li><a href="course.php"><i class="fa-regular fa-folder-open fa-beat"></i> Courses</a></li>
  <li><a href="todolist.html"><i class="fa-solid fa-list-check fa-beat"></i> To-do List</a></li>
  <li><a href="#about"><i class="fa fa-users fa-beat"></i> Team Project</a></li>
  <li><a href="#about"><i class="fa fa-newspaper-o fa-beat" aria-hidden="true"></i> Campus News</a></li>
  <li><a href="#about"><i class="fa fa-lock fa-beat" aria-hidden="true"></i> App Lock</a></li>
  <li><a href="#about"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Exam Preparation</a></li></ul>

  <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3>
  <ul>
    <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

  <li><a href="#about"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
</ul>

  </div>

  <div class="col-2 col">
    <div class="input-icons"style="max-width:600px;margin-left: 30px;">

        <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search" 
                   type="text" name="search">
                   <i class="fa fa-bell-o fa-beat" aria-hidden="true" style="font-size: 25px; margin-top: 14px; margin-left: 35px;"></i>
        </div>
      </div>
   <div class="row-1">
    <h3 style="margin-left:33px; font-size: 18px; font-family: serif; font-weight:400; margin-top: 20px;"> Hello <?php echo $nam;?>, Welcome back !</h3><br><br>
    <h3 style="margin-left: 8%; font-family: serif; font-size:18px;">Files</h3>


  </div>
  
  
    <div class="Rectangle1" style="width: 150px; height: 100px; margin-left: 50px;background: rgba(172, 182, 229, 0.64); border-radius: 5px"></div>
    
    <button style="margin-left: 6%; font-family: serif; font-size:15px; border: none; background: white;">file name</button>

 <div class="row-2">
   <h3 style="margin-left:50px; font-size:18px; font-family: serif;"> Quote of the day</h3>
   <div class="box" style="width:650px; height:100px; margin-top:10px; margin-left: 50px; border: 1px dashed #000;background: rgba(217, 217, 217, 0.15);">
     
   </div>
 </div>
 <div class="row-3" style="margin-top: 5%;">
 
 <button style="border: none; font-size:18px; font-family: serif; background:white; margin-left:6%"><b>Your Files</b></button>
  <br>
  <div class="Files"><br>
    <button style="border: solid gray; font-size:15px; font-family: serif; background:floralwhite; margin-left:7%; width:200px; height: auto; border-width: thin; text-align: left;"> &#128193;file.zip</button>
  </div>
</div>
    

</div>

 </div>

  </div>


    <div class="col-3 col">
      <h3 style="margin-left: 5px; margin-top: 3%; font-family: serif; font-size: 20px; float: left;">Profile</h3>

          <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2 style="font-family: monospace; font-weight: 300; letter-spacing: 0.05rem; font-size: 21px; margin-left: 10px;color: #818181;">Quick Search</h2>
  <input type="text" name=" search" placeholder="Search Friends" onclick="openNav()">
  <section style="display: flex;">
  <h2 style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;color: gray; margin-top:10px;">Friends</h2>
<!--   <button style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;float: right; margin-top:10px;margin-left: 255px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); ">03</button> -->
</section>

<?php

  $conn = mysqli_connect('localhost','root','','schoolaboration');

// Check the connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to avoid SQL injection.
$sqlSelect = "SELECT * FROM friends WHERE confirm = 1 
";
$stmt = $conn->prepare($sqlSelect);
// $stmt->bind_param("ss",$to_mail,$to_mail);
$stmt->execute();
$result = $stmt->get_result();
$totalrow=0;


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Sanitize and escape data before displaying it in HTML.

      if($row['from_mail']==$to_mail){

        $data_to_display = htmlspecialchars($row['to_mail']);
           echo '<form method="post">';
           echo' <a href="#"> <i class="fa fa-user-circle"></i>' .$data_to_display.' <i class="fa fa-envelope-o" style="float: right; margin-right: 12%;transition: 0.3s;"></i></a>';
        echo '</form>';
        $totalrow++;
      }
      if($row['to_mail']==$to_mail){

        $data_to_display1 = htmlspecialchars($row['from_mail']);
        echo '<form method="post">';
        echo' <a href="#"> <i class="fa fa-user-circle"></i>' .$data_to_display1.' <i class="fa fa-envelope-o" style="float: right; margin-right: 12%;transition: 0.3s;"></i></a>';
  
        echo '</form>';
        $totalrow++;
      }


    }echo'<button style="font-family: serif; font-weight: 300; font-size: 20px; float: right; top:15%;margin-left: 330px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); position:absolute;">'.$totalrow.'</button>';
} 

else {
    echo "No friends yet.";
}

// Close the statement and database connection when done.
$stmt->close();
$conn->close();
?>

  <div id="Request" class="requestButton">
    <a href="javascript:void(0)" class="closebutton" onclick="closeButton()">&times;</a>
<h2 style="font-family: monospace; font-weight: 300; letter-spacing: 0.05rem; font-size: 21px; margin-left: 10px;color: #818181;">Quick Search</h2>
  <input type="text" name=" search" placeholder="Search Friends" onclick="openNav()">
  <section style="display: flex;">
  <h2 style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;color: gray; margin-top:10px;">Requests</h2>
  <button style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;float: right; margin-top:10px;margin-left: 255px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); ">03</button>
</section>

<?php
// Establish a database connection (assuming you have already done this).
  $conn = mysqli_connect('localhost','root','','schoolaboration');

// Check the connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Use prepared statements to avoid SQL injection.
$sqlSelect = "SELECT * FROM friends WHERE confirm = 0 AND to_mail = ?";
$stmt = $conn->prepare($sqlSelect);
$stmt->bind_param("s", $to_mail);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Sanitize and escape data before displaying it in HTML.
        $data_to_display = htmlspecialchars($row['from_mail']);
        $serial = $row['serial'];
        ?>

      <form method="post">
      <a href="#"> <i class="fa fa-user-circle"></i> <?php echo $data_to_display;?> </a>

<button type="submit" name="update_confirm_no" value="NO" style="margin-left:5px;margin-right: 5px; border: none; color: indianred; font-family: serif; float: right; margin-right: 8%;"><i class="fa fa-trash-o"> </i> Delete</button><input type="hidden" name="serial_id_n" value="<?php echo $serial; ?>">
<button type="submit" name="update_confirm_yes" value="Yes" style="border:none; cursor: pointer; color: steelblue; font-family: serif; float: right;"> <i class="fa fa-check"> </i> Confirm</button> <input type="hidden" name="serial_id_y" value="<?php echo $serial; ?>">
        </form>    
     <?php   
      }
} else {
    echo "No records found.";
}

if(isset($_POST['update_confirm_yes'])) {
    $serial_id = ($_POST['serial_id_y']);
         $_SESSION['serial_id']=$serial_id;
         echo $_SESSION['serial_id'];
      

         $sqlUpdate = "UPDATE friends SET confirm = 1 WHERE serial = ?";
         $stmtUpdate = $conn->prepare($sqlUpdate);
         $stmtUpdate->bind_param("i", $_SESSION['serial_id']);
         $stmtUpdate->execute();
         $stmtUpdate->close();
         unset($_POST['update_confirm_yes']);
     
        }

if(isset($_POST['update_confirm_no'])) {
    $serial_id = ($_POST['serial_id_n']);
         $_SESSION['serial_id']=$serial_id;
          $sqlUpdate = "DELETE from friends WHERE serial = ?";
            $stmtUpdate = $conn->prepare($sqlUpdate);
            $stmtUpdate->bind_param("i", $_SESSION['serial_id']);
            $stmtUpdate->execute();
            $stmtUpdate->close();
          }

        
?>
</div>



<button style="width: 340px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="openButton()"> See Friend Requests</button>
<script>
function openButton() {
  document.getElementById("Request").style.width = "400px";
}

function closeButton() {
  document.getElementById("Request").style.width = "0";
}
</script>
</div>
      <span style="font-size:20px;cursor:pointer; float: right; margin-top: 3%;margin-right: 2%;" onclick="openNav()"><i class="fa fa-group"></i>
  
</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "400px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


      <div id="fileUploadPopup" class="popup_up" >
        <span class="popup_up-close" onclick="togglePopup()">&times;</span>
        <h2>Upload a profile picture</h2>
        <form action="process_uploadprofile.php" method="post" enctype="multipart/form-data" style="margin-top: 10%">
            <input type="file" name="uploaded_file" required>
            <input type="submit" name="upload_btn" value="Upload File">
        </form>
    </div>

    <!-- JavaScript to toggle the popup -->
    <script>
        function togglePopup() {
            var popup = document.getElementById('fileUploadPopup');
            popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
        }
    </script>



        <img src="<?php echo $profile_picture ?>" style="width: 100px;height: 100px; border-radius: 100px; border: black solid 1px; margin-left: 22%; margin-top:20%;">
        <h3 style="margin-left: 45%; margin-top: 3%; font-family: serif; font-size: 20px; "><?php echo $nam;?><button style="font-size: 16px;background: white; border: thin; cursor:  pointer;" onclick="togglePopup()"><i class="fa fa-edit"></i></button></h3>
      
      <div class="calender" style="width:390px; height: 200px;margin-left: 2px; margin-top: 5%; border: 1px solid black;"> calender banao</div>
      <div class="Friends">
      <h3 style="margin-left: 5px; margin-top: 3%; font-family: serif; font-size: 20px; float: left;">Your Friends</h3>
      <button style="float: right; font-size: 16px; font-family: serif; margin-top: 3%; border-radius: 5px; margin-right: 2%; border: thin" onclick="hideshow()">&#9776; Add friend</button><br>
      <br>


<?php

  $conn = mysqli_connect('localhost','root','','schoolaboration');

// Check the connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to avoid SQL injection.
$sqlSelect = "SELECT * FROM friends WHERE confirm = 1 
";
$stmt = $conn->prepare($sqlSelect);
// $stmt->bind_param("ss",$to_mail,$to_mail);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Sanitize and escape data before displaying it in HTML.

      if($row['from_mail']==$to_mail){

        $data_to_display = htmlspecialchars($row['to_mail']);
           echo '<form method="post">';
        echo "<p>$data_to_display</p>";
        echo '</form>';
      }
      if($row['to_mail']==$to_mail){

        $data_to_display1 = htmlspecialchars($row['from_mail']);
        echo '<form method="post">';
        echo "<p>$data_to_display1</p>";
        echo '</form>';
      }


    }
} else {
    echo "No friends yet.";
}

// Close the statement and database connection when done.
$stmt->close();
$conn->close();
?>





      <p class="Friends_list" style=" margin-top: 3%; font-family: serif; font-size: 17px; margin-left: 10px; color: gray;">&#9993;jahir@gmail.com</p>
    </div>
    </div>

     <div id="main" class="profile">
    <form method="post" action="friends.php">
    bondhumohol <br> <h1> ADD friends</h1>
     <input type="text" name="friends" placeholder="enter phone number">
     <button type="submit" name="add_friend">Confirm</button>

   </form>
 </div>






</div>

<script>
var div=document.getElementById('main');
var display=0;
function hideshow(){

  if(display==0)
  {
    div.style.display='none';
    display=1;
  }
  else{

    div.style.display='block';
    display=0;
  }
}


</script>

</body>

</html>