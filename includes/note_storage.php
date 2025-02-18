<?php
error_reporting(0);
session_start(); // Start the session

if (isset($_SESSION["status"]) && $_SESSION["status"] == false) {
    // The user is not logged in, so show an alert and redirect to login.php
    echo("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='login.php';
        </script>");
} else {
    // The user is logged in, you can proceed with other code

    // Get the stored name and phone from the session
    $name = $_SESSION['nam'];
    $phone = $_SESSION['phone'];

    // Establish a database connection
    $conn = mysqli_connect('localhost', 'root', '', 'schoolaboration');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Now you can perform other tasks with the database or display user information.

?>


<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>note_storage</title>
  <link rel="stylesheet" type="text/css" href="#">
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
  height: 651px;
  box-sizing: border-box;
}

.footer{
  color: #805c59;
}
.col-1{
  width: 15%;
  background: white;
  position: fixed;
}

.col-2 {
  width: 60%;
  margin-left: 15%;
}
.col-1 ul{
 font-size: 100%;
}
.col-1 a{
  text-decoration: none;
  color: rgba(0, 0, 0, 0.65);
  font-family: serif;
  font-weight: 400;
}
.col-1 li{

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

.row-1{
  width: 85%;
  background-color: white;
  margin-left: 5%;
  margin-top: 5px;

}

.row-2{
  
  margin-top: 17%;
    margin-left: 5%;
}
.input-icons i {
            position: absolute;
        }
         
        .input-icons {
            width: 100%;
            margin-bottom: 5px;
        }
         
        .icon {
            padding: 20px;
            min-width: 40px;
        }
         
        .input-field {
            width: 100%;
            padding: 8px;
            text-align: center;
            border: none;
            border-radius: 10px;
            opacity: 0.5;
            height: 10%;
            background: rgba(185, 147, 214, 0.5);
        }
        input{
          margin-top: 12px;
          
        }


      .folder {
  display: flex;
  float: left;
  position: relative;
  margin-left: 10px;

}

.file {
  text-align: center;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

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
.Search{

height: 35px;
width: 300px;
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
        .details{
          background-color: black; 
          height: 20px; 
          width: 50px;
          margin-left: 70%;
          color:white;
         display: none;
        }
.open-details{
  visibility: visible;
 background-color: pink;

}
.overlay {
  height: 60%;
  width: 20%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.50);
  margin-right: 5%;
  margin-top: 5%;
  border-radius: 20px;
}

.overlay-content {
  position: relative ;

  
  width: 100%;
  text-align: center;
  
}

.overlay-content a {
  padding: 1px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  display: block;
  transition: 0.3s;
}


.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 0;
  right: 20px;
  font-size: 36px;
  margin-left: 60px;
}
.content-view{
    width: 273px;
    height: 100px;
    background-color: lavender;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    

}
.user-profile{
    align-items: center;
    height: 90px;
    width: 90px;
    border-radius: 50px;
    background-color: white;
    position: absolute;
    margin-left: 95px;
    margin-top: 60px;
}

  </style>
  
</head>
<body>
  <div>
  <div class="col-1 col" style="background: linear-gradient(269deg, rgba(118, 147, 203, 0.49) 1.49%, rgba(118, 203, 195, 0.15) 100%);">
    <img src="images/logo.png" style="width: 170px; height:60px" >
    <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:10px;">Menu</h3>

  <ul>
    <li><a href="dashboard.php"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
  <li><a href="note_storage.php"><i class="fa fa-sticky-note-o fa-beat"> </i> Note Storage</i></a></li>
  <li><a href="course.php"><i class="fa-regular fa-folder-open fa-beat"></i> Courses</a></li>
  <li><a href="todolist.html"><i class="fa-solid fa-list-check fa-beat"></i> To-do List</a></li>
  <li><a href="#about"><i class="fa fa-users fa-beat"></i> Team Project</a></li>
  <li><a href="news.html"><i class="fa fa-newspaper-o fa-beat" aria-hidden="true"></i> Campus News</a></li>
  <li><a href="#about"><i class="fa fa-lock fa-beat" aria-hidden="true"></i> App Lock</a></li>
  <li><a href="#about"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Exam Preparation</a></li></ul>

  <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3>
  <ul>
    <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

  <li><a href="#about"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
</ul>

  </div>
  <button  type="submit" onclick="openPopup()" style="float: right; margin-top: 5%; margin-right: 8%; border: none; background: white; font-family: serif; font-size: 17px;"><h3>+ Create New Folder<h3></button>

  <div class="col-2 col">
    <div class="input-icons"style="max-width:1000px;margin-left:5%; float: left;border: none;">
        <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search for Files or Folders" type="text" name="search">
                   <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 25px; margin-top: 15px; margin-left:6%;"></i>
                  <span> <i class="fa fa-user-circle" aria-hidden="true" style="font-size:25px; margin-left: 11%; margin-top:15px" onclick="openNav()"></i></span>
        </div>
      </div>
      <div id="myNav" class="overlay">
  
  <div class="overlay-content">
    <div class="content-view">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="user-profile">
            <img src="<?php echo $_SESSION['profile_picture'];?>" style="width: 100px; height: 100px;">
        </div>
 <p style="color: white;margin-top: 160px; position:absolute; margin-left: 115px;"> <?php echo $_SESSION['nam'] ;?></p>
 <p style="color: white;margin-top: 180px; position:absolute; margin-left: 80px;"> <?php echo $_SESSION['email'] ;?></p>
    </div>


  </div>
  <button style="margin-top: 150px; margin-left:90px; background:white; border-radius:10px;border: none; width: 100px; height:30px"><a href="signout.php" style="padding: 1px;text-decoration: none;font-size: 15px; color: black;transition: 0.3s;"><i class="fa fa-sign-out" aria-hidden="true"></i></i> Sign Out</a></button>
  <button style="margin-top: 10px; margin-left:70px; background:white; border-radius:10px;border: none; width: 150px; height:30px">+Add another Account</button>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

function closeNav() {
  document.getElementById("myNav").style.display = "none";
}
</script>

   <div class="row-1" style="height: auto;">
    <br>
    <button style="border: none; font-size:18px; font-family: serif; background: white; margin-top: 15px;"><a href="youfolder.php" style="text-decoration: none;"> <h3>Your Folders</h3> </a></button>
  </div>

      <div class="yourfolders" style="margin-left: 1%">
 <?php
$query = "SELECT * FROM folder where user_phone={$_SESSION['phone']} ORDER BY datetime DESC LIMIT 3";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

for ($i = 1; $i <= $total; $i++) {
    $result = mysqli_fetch_assoc($data);
?>
<form  method="post">
<div class="Rectangle1" style="width:200px; height:100px;float:left;margin-left:5%;margin-top:10px;  border-radius: 5px;background: rgba(172, 182, 229, 0.64); box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">  <span class="folder-icon">&#128194;</span> 

  <input  class="Rectangle1_name" type="submit" style="border: none; margin-top:1%; font-size:15px; font-family:serif; margin-left: 5%; background-color: white;" name="folder_click" value=<?php echo $result['folder_name'];?>>
<button type="button" onclick="hideshow('popdetails')" name="det_folder">&#8758;</button>
<!--     <div class="details" id="popdetails"> -->
             <button  type="submit" name="del_folder">delete</button>

  <!--   </div> -->
 
  <input type="hidden" name="folder_id" value=<?php echo $result['folder_id']; ?>>
  <input type="hidden" name="folder_name" value=<?php echo $result['folder_name']; ?>>
    <input type="hidden" name="folder_path" value=<?php echo $result['folder_path']; ?>>
<br>
</div>
    </form>
<!--       <input type="submit" onclick="hideshow()"  name="det_folder"value="&#8758;">   
 -->

<?php

if(isset($_POST['folder_click'])) {
            $folder_id=($_POST['folder_id']);
            $folder_name=($_POST['folder_name']);

            $_SESSION['folder_id']= $folder_id;  
            $_SESSION['folder_name']= $folder_name;        
      
            ?>

                <script>
                    window.location.href=" filess.php";
                </script>

<?php
}

if(isset($_POST['del_folder'])) {
            $folder_id=($_POST['folder_id']);
            $folder_name=($_POST['folder_name']);

            $_SESSION['folder_id']= $folder_id;  
            $_SESSION['folder_name']= $folder_name;     
            $_SESSION['folder_path']=$_POST['folder_path'];   
      
            ?>

                <script>
                    window.location.href=" delete_folder.php";
                </script>

<?php
}



}
?>

</div>

  <div class="sharedwithme">
  <div class="row-2">
  
    <button style="border: none; font-size:18px; font-family: serif; background:white;"><a href="sharedwithme.php" style="text-decoration: none;"><h3>Shared with me</h3></a></button>
  </div><br>

<div class="Rectangle2" style="width:100%; height:auto;margin-left:4%;border-radius: 5px;background: rgba(172, 182, 229, 0.64);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
  <?php
        
        $conn = mysqli_connect('localhost','root','','schoolaboration');
        $sql = "SELECT file_name, file_path FROM sharedwithme where user_phone=$phone LIMIT 4";
        $result = $conn->query($sql);

        // Fetch and display the images
        while ($row = $result->fetch_assoc()) {
            $file_name = $row['file_name'];
            $file_path = $row['file_path'];
       
         $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        // Display images
        if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {

            ?>
             <a href="<?php echo $file_path; ?>" target="hu">    
         <div class="folder">
         <div class="file">
              <img src='<?php echo $file_path; ?>'alt="Image File">
              <p><?php echo $file_name ;?></p></a>
              
         </div>
         </div>
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
              </div>
            </div>
          </a>
            <?php
        }


        if ($file_extension === 'txt') {

            ?>
         <a href="<?php echo $file_path; ?>" target="hu">    
             <div class="folder">
    <div class="file">
      <img src='images/text.png'alt="Image File">
      <p><?php echo $file_name; ?></p>

       

    </div>
  </div></a>

            <?php
            
        }
        if ($file_extension === 'docx') {
            ?>
         <a href="<?php echo $file_path; ?>" target="hu">   
            <div class="folder">
    <div class="file">
      <img src='images/docx.png' alt="Image File">
      <p><?php echo $file_name; ?></p>
    </div>
  </div></a>

  <?php
        }
        }

        // Close the database connection
      
        ?>
    </div>
    <div class="popup" id="popup">
      <div class="popup_text">
        <br>
        <br>
        <form action="process.php" method="POST">
      <h1> Create a new folder</h1>
      <br>
      <input class="Search" type="text" name="folderName"placeholder="Enter folder name">
      <br>
      <button type="submit" name="submit">OK</button>
      <button type="button" onclick="closePopup()">Cancel</button>
     
           </form>



  </div>
</div>

</div>

  

    <!-- The upload file popup -->
    <div id="fileUploadPopup" class="popup_up">
        <span class="popup_up-close" onclick="togglePopup()">&times;</span>
        <h2>Upload a File</h2>
        <form action="process_uploadfile.php" method="post" enctype="multipart/form-data" style="margin-top: 10%">
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


  <br>
  <div class="uploaad" style="margin-top:16%">
  <div class="uploadFile" style= "font-size:18px; font-family: serif; background:white; margin-left: 6%;"><a href="note_storage.php" style="text-decoration: none;"> <h3>Upload Files</h3></a></div><br>
  <div class="Rectangle3" style="width: 1000px;height: 70px; border: dotted;border-width: thin;margin-left: 5%;">
  <button onclick="togglePopup()" style="margin-left: 470px; border: none;background-color: white; cursor: pointer;"> <i class="fa fa-upload" style="margin-top:1%"> </i></button>
      
    <button class="file-upload-btn" style="margin-left: 400px; margin-top: 12px; border: none;background: white; font-family: serif;"> Drag and drop file or <a href="">Browse</a></button>
  </div>
</div>
      
      <br>
      <div class="myfiles">
    <button style="border: none; font-size:18px; font-family: serif; background:white; margin-left:5%">
      <a href="filess.php" style="text-decoration: none;"><h3>Your Files</h3></a></button>
  <br>
  <div class="Files" style="margin-left: 4%"><br>
<!--     <button style="border: solid gray; font-size:15px; font-family: serif; background:floralwhite; margin-left:5%; width:200px; height: auto; border-width: thin; text-align: left;"> &#128193;file.zip</button>
 -->


<?php
        
        $conn = mysqli_connect('localhost','root','','schoolaboration');
        $sql = "SELECT file_name, file_path FROM files where folder_id=0 ";
        $result = $conn->query($sql);

        // Fetch and display the images
        while ($row = $result->fetch_assoc()) {
            $file_name = $row['file_name'];
            $file_path = $row['file_path'];
       
         $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        // Display images
        if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {

            ?>
             <a href="<?php echo $file_path; ?>" target="hu">    
         <div class="folder">
         <div class="file">
<!--               <img src='<?php echo $file_path; ?>'alt="Image File">
 -->              <p><?php echo $file_name ;?></p></a>
              
         </div>
         </div>
     <?php
        }

        // Display PDFs
        if ($file_extension === 'pdf') {
            ?>
         <a href="<?php echo $file_path; ?>" target="hu">    
         <div class="folder" oncontextmenu="showContextMenu(event)">
         <div class="file">
        <!--       <img src='images/pdf.png'alt="Image File"> -->
              <p><?php echo $file_name; ?></p>
              </div>
            </div>
          </a>
            <?php
        }


        if ($file_extension === 'txt') {

            ?>
         <a href="<?php echo $file_path; ?>" target="hu">    
             <div class="folder">
    <div class="file">
     <!--  <img src='images/text.png'alt="Image File"> -->
      <p><?php echo $file_name; ?></p>

       

    </div>
  </div></a>

            <?php
            
        }
        if ($file_extension === 'docx') {
            ?>
         <a href="<?php echo $file_path; ?>" target="hu">   
            <div class="folder">
    <div class="file">
<!--       <img src='images/docx.png' alt="Image File"> -->
      <p><?php echo $file_name; ?></p>
    </div>
  </div></a>

  <?php
        }
        }

        // Close the database connection
      
        ?>


  </div>

</div>
</div>


<script type="text/javascript">
  
 let popup = document.getElementById("popup");
  let popupdetails = document.getElementById("popdetails");

  function openPopup() {
    popup.classList.add("open-popup");
  }

  function closePopup() {
    popup.classList.remove("open-popup");
  }

  function opendetails() {
    popupdetails.classList.add("open-details");
  }

  function closedetails() {
    popupdetails.classList.remove("open-details");
  }

  var div=document.getElementById('popdetails');
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
<?php
}
?>