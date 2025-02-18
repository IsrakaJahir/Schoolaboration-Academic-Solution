<?php
session_start();
// error_reporting(0);
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
.folder-list {
  display: flex;
  padding: 0.1rem;
}


.folder {
  display: flex;
  float: left;
  position: relative;
  margin-left: 20px;

}

.file {
   width:200px; 
  height:160px;
  margin-left:5%;
  border-radius: 5px;
  text-align: center;
  padding: 10px;
  margin-top: 10%;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  background: rgba(172, 182, 229, 0.64);
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);

}
  

.file img {
  width: 80px;
  height: 80px;
  margin-bottom: 10px;
}

.file p {
  margin: 0;
  font-size: 14px;
}

.Rectangle1{
  width:200px; 
  height:100px;
  margin-left:5%;
  border-radius: 5px;
  background: rgba(172, 182, 229, 0.64);
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}
.task{
  display: block;
  padding: 0.1rem;
}
.task1{
  margin-top: 1%;
}
.task1 button{
  border: solid gray; 
  font-size:15px; 
  font-family: serif; 
  margin-left:5%; 
  width:690px; 
  height: 40px;
  border-radius: 5px; 
  border: none; 
  text-align: left;
  background: rgba(185, 147, 214, 0.35);
}
.todolist{
  display: block;
  padding: 0.1rem;
}
.list1 button{
border: solid gray; 
  font-size:15px; 
  font-family: serif; 
  margin-left:5%; 
  width:350px; 
  height: 40px;
  border-radius: 5px; 
  border: none; 
  text-align: left;
  background: rgba(172, 182, 229, 0.12);;
}
.list1{
  margin-top: 2%;
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
  background: rgba(172, 182, 229, 0.12);
  height: auto;
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);;
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
  margin-top: 30%;
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
        .col-2 input{
          margin-top: 12px;
          
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
.calendar {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: rgba(172, 182, 229, 0.64);;
    color: gray;
}

#currentMonth {
    margin: 0;
    font-size: 18px;
}

.calendar button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.calendar button:hover {
    text-decoration: underline;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 5px;
    padding: 10px;
}

.calendar-day {
    text-align: center;
    padding: 5px;
    border: 1px solid #ccc;
    background-color: #fff;
    font-family: serif;
    cursor: pointer ;
}

.calendar-day:hover {
    background-color: pink;
}
#currentDate{
  font-size: 18px;
  font-family: serif;
  margin-left: 10px;
  margin-top: 10px;
margin-bottom: 10px;
font-weight: 600;
}
.profile{
    right: 35%;
    height: 300px;
    width: 400px;
    top: 20%;
    position: absolute;
    background-color:rgba(172, 182, 229, 0.88);
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  display: none;
  border-radius: 6px;

     
}
.popup{
  width: 400px;
  height: 300px;
  background-color: rgba(172, 182, 229, 0.12);
  box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
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
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(172, 182, 229, 0.88);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);;;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 400px;
            height: 300px;
        }

        /* Style for the close button */
        .popup_up-close {
            position: absolute;
            top: 3px;
            right: 8px;
            cursor: pointer;
            font-size: 35px;
        }


      </style>
</head>
<body>
  <div>
  <div class="col-1 col" style="background: linear-gradient(269deg, rgba(118, 147, 203, 0.49) 1.49%, rgba(118, 203, 195, 0.15) 100%);">
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
  <li><a href="chat.php"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Chat </a></li></ul>

  <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3>
  <ul>
    <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

  <li><a href="signout.php"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
</ul>

  </div>

  <div class="col-2 col">
    <div class="input-icons"style="max-width:650px;margin-left: 30px;">
   <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search" type="text" name="search">
                   <i class="fa fa-bell-o fa-beat" aria-hidden="true" style="font-size: 25px; margin-top: 14px; margin-left: 30px;"></i>
        </div>
      </div>
   <div class="row-1">
    <h3 style="margin-left:33px; font-size: 18px; font-family: serif; font-weight:400; margin-top: 20px;"> Hello <font size="6px" color="#9370DB" ><?php echo $nam;?></font>, Welcome back !</h3><br><br>
    <h3 style="margin-left: 5%; font-family: serif; font-size:18px;"><a  style="text-decoration: none" href="note_storage.php">Files</a></h3>




     <div id="image-container">
    <?php
        $conn = mysqli_connect('localhost','root','','schoolaboration');
        $sql = "SELECT file_name, file_path,file_id FROM files WHERE user_phone={$_SESSION['phone']} order by upload_date desc limit 3";
        $result = $conn->query($sql);

        // Fetch and display the images
        while ($row = $result->fetch_assoc()) {
            $file_name = $row['file_name'];
            $file_path = $row['file_path'];
            $file_id =   $row['file_id'];
       
         $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        // Display images
        if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {

            ?>
             <a href="<?php echo $file_path; ?>" target="hu">    
         <div class="folder">
         <div class="file">
              <img src='<?php echo $file_path; ?>'alt="Image File">
              <p><?php echo $file_name; ?></p>
              
              <form method="post">    
              <input type="submit" name="delete_click" value="Delete">
              <input type="submit" name="share_click" onclick="hideshow();" value="Share">
              <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
              <input type="hidden" name="file_path" value="<?php echo $file_path; ?>">
              <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
              </form>
         </div>
         </div>
     </a>
     <?php
        }

        // Display PDFs
        if ($file_extension === 'pdf') {
            ?>
         <a href="<?php echo $file_path; ?>" target="hu">    
         <div class="folder" oncontextmenu="showContextMenu(event)">
         <div class="file">
              <img src='images/pdf.png'alt="Image File">
              <p><?php echo $file_name; ?></p>
              <form method="post">    
                 <input type="submit" name="delete_click" value="Delete">
                  <input type="submit" name="share_click" onclick="openPopup()" value="Share">
              <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
              <input type="hidden" name="file_path" value="<?php echo $file_path; ?>">
               <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">

             
        </form>
         </div>
         </div>
          </a><div class="context-menu" id="contextMenu">
     

  </div> 
            <?php
        }


        if ($file_extension === 'txt') {

            ?>
         <a href="<?php echo $file_path; ?>" target="hu">    
             <div class="folder">
    <div class="file">
      <img src='images/text.png'alt="Image File">
      <p><?php echo $file_name; ?></p>

         <form method="post">    
                 <input type="submit" name="delete_click" value="Delete">
                  <input type="submit" name="share_click" onclick="openPopup()" =value="Share">
              <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
              <input type="hidden" name="file_path" value="<?php echo $file_path; ?>">
               <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
</form>
    </div>
  </div></a>

            <?php
            
        }
        if ($file_extension === 'docx') {
            ?>
         <a href="<?php echo $file_path; ?>" target="hu">   
            <div class="folder" >
    <div class="file" >
      <img src='images/docx.png' alt="Image File">
      <p><?php echo $file_name; ?></p>
      <form method="post">    
                 <input type="submit" name="delete_click" value="Delete">
                  <input type="submit" name="share_click" onclick="openPopup()" value="Share">
              <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
              <input type="hidden" name="file_path" value="<?php echo $file_path; ?>">
               <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">
  </form>  </div>
  </div></a>

  <?php
        }
        }

        // Close the database connection
      
        ?>
   
  </div>
  
</section>



<div id="main" class="profile">
    <form method="post" action="friends.php"><br> <h2 style="text-align:center;"> Add a new friend</h2>
     <input type="text" name="friends" placeholder="Enter phone number" style="margin-left:100px; border-top: none;font-family: serif; font-size:15px; margin-top:45px; width: 50%; height:40px; background:transparent; text-align:center; border-right: none; border-left:none;"><br>
     <button type="submit" name="add_friend" style="margin-top: 60px; background-color:white;border-radius: 10px; width: 100px; height:40px; margin-left:100px; font-family:serif; font-size:20px; border:thin;">Confirm</button>
       <button name="add_friend" style="margin-top: 60px; background-color:white;border-radius: 10px; width: 100px; height:40px;  font-family:serif; font-size:20px; border:thin;"><a href="dashboard.php" style="text-decoration: none;">Cancel</a></button>
   </form>
   
 </div>

<br>
 <div class="row-2">
   <h3 style="margin-left:5%; font-size:18px; font-family: serif;"> Quote of the day</h3>

   <div class="box" style="width:690px; height:100px; margin-top:10px; margin-left: 5%; text-align: center; padding-top: 30px; font-size: 20px; border-radius:10px; 
         background: linear-gradient(109.6deg, rgb(177, 173, 219) 11.2%, rgb(245, 226, 226) 91.1%);
         font-family: cursive;">
<?php
// Establish a database connection (update the credentials as needed)
$conn = mysqli_connect('localhost', 'root', '', 'schoolaboration');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 1: Retrieve the total number of rows in the table
$query = "SELECT COUNT(*) as total_rows FROM quotes";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error in counting rows: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$totalRows = $row['total_rows'];

// Step 2: Generate a random number within the range of rows
$randomRowNumber = rand(1, $totalRows);

// Step 3: Query the database to retrieve the randomly selected row
$query = "SELECT quotes FROM quotes WHERE q_id = $randomRowNumber";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error in fetching random row: " . mysqli_error($conn));
}

// Step 4: Display the selected row
if (mysqli_num_rows($result) > 0) {
    $selectedRow = mysqli_fetch_assoc($result);

    
    echo $selectedRow['quotes'] ;

} else {
    echo "No rows found in the table.";
}

// Close the database connection
mysqli_close($conn);
?>







     
   </div>
 </div>
 <div class="row-3" style="margin-top: 5%;">
 
 <h3 style="border: none; font-size:18px; font-family: serif; background:white; margin-left:5%"><b>On track Projects</b></h3>
  <br>
  <section class="task">
  <div class="task1">
    <button>&#8618; Website Design <h2 style="float: right;">&#8942;</h2></button>
  </div>
  <div class="task1">
    <button>&#8618; Final Paper <h2 style="float: right;">&#8942;</h2></button>
  </div>
</section>
</div>
</div>
 </div>
  </div>

    <div class="col-3 col">
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2 style="font-family: monospace; font-weight: 300; letter-spacing: 0.05rem; font-size: 21px; margin-left: 10px;color: #818181;">Quick Search</h2>
  <input type="text" name=" search" placeholder="Search Friends" onclick="openNav()">
  <section style="display: flex;">
  <h2 style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;color: gray; margin-top:10px;">Friends</h2>
  <!-- <button style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;float: right; margin-top:10px;margin-left: 255px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); ">03</button> -->
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
$totalreq=0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Sanitize and escape data before displaying it in HTML.
        $data_to_display = htmlspecialchars($row['from_mail']);
        $serial = $row['serial'];
        $totalreq++;
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
 echo'<button style="font-family: serif; font-weight: 300; font-size: 20px; float: right; top:15%;margin-left: 330px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); position:absolute;">'.$totalreq.'</button>';;

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
<button style="width: 350px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif;cursor: pointer; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="closeButton()"> See Friends</button>
</div>



<button style="width: 340px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="openButton()"> See Friend Requests</button>
<button style="width: 340px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="hideshow()"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
 Add new Friend</button>

     
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
        <h2 style="text-align: center; font-family:serif; font-size: 22px; letter-spacing:0.05rem ;font-weight: 300;">Upload a profile picture</h2>
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

        <img src="<?php echo $profile_picture ?>" style="width: 100px;height: 100px; border-radius: 100px; border: black solid 1px; margin-left: 38%; margin-top:20%;">
        <h3 style="margin-left: 45%; margin-top: 3%; font-family: serif; font-size: 20px; "><?php echo $nam;?><button style="font-size: 16px;background: white; border: thin; cursor:  pointer;" onclick="togglePopup()"><i class="fa fa-edit"></i></button></h3>
        <br>
        <br>
      
      <div class="calendar">
        <div class="calendar-header">
            <button id="prevMonth"><i class="fa fa-angle-double-left" aria-hidden="true" style="color:black; "></i>
</button>
            <h1 id="currentMonth"></h1>
            <button id="nextMonth"><i class="fa fa-angle-double-right" aria-hidden="true" style="color: black;"></i>
</button>
        </div>
        <div class="calendar-grid" id="calendarGrid"></div>
        <p id="currentDate"></p>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const prevMonthBtn = document.getElementById("prevMonth");
    const nextMonthBtn = document.getElementById("nextMonth");
    const currentMonthText = document.getElementById("currentMonth");
    const currentDateText = document.getElementById("currentDate");
    const calendarGrid = document.getElementById("calendarGrid");

    let currentDate = new Date();

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        currentMonthText.textContent = new Date(year, month).toLocaleDateString("en-US", {
            month: "long",
            year: "numeric",
        });

        calendarGrid.innerHTML = "";

        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyDay = document.createElement("div");
            calendarGrid.appendChild(emptyDay);
        }

        for (let i = 1; i <= lastDateOfMonth; i++) {
            const day = document.createElement("div");
            day.textContent = i;
            day.className = "calendar-day";
            calendarGrid.appendChild(day);
        }
        currentDateText.textContent = " Today: " + currentDate.
        toLocaleDateString("en-US");
    }

    renderCalendar();

    prevMonthBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    nextMonthBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });
});

    </script>
      
<div class="todo">
      <h3 style="margin-left: 5px; margin-top: 3%; font-family: serif; font-size: 20px; float: left;">To do List</h3>
      <br>
      <br>
      <section class="todolist">
        <div class="list1">
          <button>Writing Practice</button>
        </div>
        <div class="list1">
          <button>Listening Practice</button>
        </div>
        <div class="list1">
          <button>Listening Practice</button>
        </div>
        <div class="list1">
          <button>Listening Practice</button>
        </div>
        <div class="list1">
          <button>Listening Practice</button>
        </div>
      </section>
    </div>
    </div>
    

</div>


      <!-- <p class="Friends_list" style=" margin-top: 3%; font-family: serif; font-size: 17px; margin-left: 10px; color: gray;">&#9993;jahir@gmail.com</p> -->
    </div>
    </div>

 <!--     <div id="main" class="profile">
    <form method="post" action="friends.php">
    bondhumohol <br> <h1> ADD friends</h1>
     <input type="text" name="friends" placeholder="enter phone number">
     <button type="submit" name="add_friend">Confirm</button>

   </form>
 </div>
 -->
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
<script type="text/javascript">
  
  let popup=document.getElementById("popup");


function closePopup(){
  popup.classList.remove("open-popup");

}
</script>

</body>

</html>