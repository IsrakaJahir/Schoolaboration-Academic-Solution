<?php
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
  background: rgba(132, 140, 132, 0.20);
  font-family: garamond, serif;

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
  width: 17%;
  background: white;
  position: fixed;
}

.col-2 {
  width: 44%;
  margin-left: 20%;
  background-color: white;
  margin-top: 2%;
  border-radius: 20px;
  border-top-left-radius: 20px !important;

}
.col-3{
  width: 30%;
 float: right;
  background: white;
  margin-right: 3%;
  margin-top: 2%;
  border-radius: 20px;
}
.col-1 ul{
 font-size: 100%;
 background-color: white;
}
.col-1 a{
  text-decoration: none;
  color: rgba(0, 0, 0, 0.65);
  font-family: garamond,serif;
  font-weight: 400;
}
.col-1 li{
  background-color: white;

}
li a{
  background-color: white;
  display: block;
  padding: 15px;
}
li a:hover {
  background-color: #e8eaed;
}
li{
  list-style-type: none;
   
}
li i{
  background-color: white;
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
            background-color: white;
        }
         
        .input-icons {
            width: 83%;
            margin-bottom: 5px;
            background-color: white;
        }
         
        .icon {
            padding: 15px;
            min-width: 30px;
            background-color: white;
        }
         
        .input-field {
            width: 60%;
            padding: 8px;
            text-align: center;
            border: none;
            border-radius: 10px;
            opacity: 0.5;
            height: 10%;
            background-color: white;
           
        }
        input{
          margin-top: 12px;
          
        }


      .folder {
  display: flex;
  float: left;
background-color: white;

}

.file-container {
  /*height: 120px;
  width: 250px;
  margin-left: 12px;
  margin-right: 17px;
  margin-bottom: 20px;
  background-color: #BBE4E9;
  border-radius: 5px;

}
  

.file img {
  width: 80px;
  height: 80px;
  margin-bottom: 10px;


}

.file p {
 
  margin-top: 20px;
  font-size: 20px;
  color: black;
  background-color: transparent;
  text-align: center;

}


.circle {
            width: 50px;
            height: 50px;
            background-color: #fff; /* White circle background color */
      /*      border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .circle i {
            color: #000; /* Black icon color */
         /*   font-size: 24px;
        }

        .file-name {
            font-size: 16px;
            color: #333;
        }*/*/
display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 300px;
            background-color: #add8e6; /* Baby blue background color */
        }

        .circle {
            width: 50px;
            height: 50px;
            background-color: #fff; /* White circle background color */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }

        .circle i {
            color: #000; /* Black icon color */
            font-size: 24px;
        }

        .file-info {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .file-name {
            font-size: 16px;
            color: #333;
        }

        .file-size {
            font-size: 12px;
            color: #555;
        }


.Search{
height: 35px;
width: 300px;
font-size: 15px;
}
.popup{
  width: 500px;
  height: 280px;
  background-color: white;
  position: absolute;
  border-radius: 10px;
  left:42%;
  transform: translate(-50%,-50%) scale(0.1);
  text-align: center;
  visibility: hidden;
  transition: transform 0.4s,top 0.4s;
  font-size: 20px; 
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
 background: #7B2DE4;
 color: white;
 border:0px;
 outline: none;
 font-size: 18px;
 border-radius: 4px;
 cursor: pointer;

}
.popup_text{
  background-color: white;

}
.popup_up{
            display: none;
            position: fixed;
            top: 50%;
            left: 42%;
            transform: translate(-50%,-50%);
            background-color:white;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 500px;
            height: 200px;
            transition: transform 0.4s,top 0.4s;
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

.sharedFile{
  height: 56px;
  width: 341px;
  border-radius: 20px;
  border: 1px solid #777;
  margin-left: 31px;
  margin-right: 31px;
  margin-top: 15px;
  margin-bottom: 10px;
  background-color: transparent;
}


  </style>
  
</head>
<body>
  <div>
  <div class="col-1 col" style="background: white;">
    <img src="images/logo.png" style="width: 170px; height:60px; background:white" >
    <!-- <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:10px;">Menu</h3> -->

  <ul>
    <li style="margin-top:15px;"><a href="dashboard.php"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
  <li><a href="note_storage.php"><i class="fa fa-sticky-note-o fa-beat"> </i> Note Storage</i></a></li>
  <li><a href="course.php"><i class="fa-regular fa-folder-open fa-beat"></i> Courses</a></li>
  <li><a href="todolist.html"><i class="fa-solid fa-list-check fa-beat"></i> To-do List</a></li>
  <li><a href="#about"><i class="fa fa-users fa-beat"></i> Team Project</a></li>
  <li><a href="news.html"><i class="fa fa-newspaper-o fa-beat" aria-hidden="true"></i> Campus News</a></li>
  <li><a href="#about"><i class="fa fa-lock fa-beat" aria-hidden="true"></i> App Lock</a></li>
  <li><a href="#about"><i class="fa fa-commenting-o fa-beat" aria-hidden="true"></i> Chat</a></li></ul>
  <ul>
    <br><br><br><br><br><br><br><br><br><br><br>
    <li style=""><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <!-- <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li> -->

  <li><a href="#about"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
  <br>
</ul>

  </div>
  <!-- <button  type="submit" onclick="openPopup()" style="float: right; margin-top: 5%; margin-right: 8%; border: none; background: white; font-family: serif; font-size: 17px;"><h3>+ Create New Folder<h3></button> -->
     <div class="input-icons"style="margin-left:17%; float: left;border: none;">
        <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search for Files or Folders" type="text" name="search">
                   <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 28px; margin-top: 15px; margin-left:28%;"></i>
                  <i style="font-size:30px;cursor:pointer; height:31px ; width:31px;border-radius:50px;background-color: black; margin-left:32%; margin-top: 11px;"onclick="openNav()"><h5 style="margin-left:35px; font-size:18px; font-style: normal;font-weight: 300; margin-top:5px;">Suukyi</h5>
       
     </i>
        </div>
      </div>

  <div class="col-2 col">
   
      <div id="myNav" class="overlay">
  
  <div class="overlay-content">
    <div class="content-view">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="user-profile">
            
        </div>
 <p style="color: white;margin-top: 160px; position:absolute; margin-left: 115px;"> kkjmijij</p>
 <p style="color: white;margin-top: 180px; position:absolute; margin-left: 80px;"> kkjmijij@gmail.com</p>
    </div>


  </div>
  <button style="margin-top: 150px; margin-left:90px; background:white; border-radius:10px;border: none; width: 100px; height:30px"><a href="#about" style="padding: 1px;text-decoration: none;font-size: 15px; color: black;transition: 0.3s;"><i class="fa fa-sign-out" aria-hidden="true"></i></i> Sign Out</a></button>
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
    <br><br><br>
    <button style="border: none; font-size:18px; background: white;margin-left: 30px; "><a href="youfolder.php" style="text-decoration: none;"> <h4 style="background:white; color: black; font-weight: 300; font-size:20px">My Folders</h4> </a></button>
    
    <button style=" border:none; background:transparent;font-size:16px;" onclick="openPopup()"><i class="fa fa-plus" style="background:transparent;margin-left: 230px; "> </i> New Folder</button>
          <div class="popup" id="popup">
      <div class="popup_text">
        <br>
        <br>
        <form action="process.php" method="POST" style="background:transparent;">
          <h3 style="background:transparent;"> Create a new folder</h3>
          <br>
      <input class="Search" type="text" name="folderName"placeholder="Enter folder name" style="background:transparent; border-radius: 10px; text-align:center;">
      <br>
      <button type="submit" name="submit">Ok</button>
      <button type="button" onclick="closePopup()">Cancel</button>
     
           </form>



  </div>
</div>
    <button style=" border:none; background:transparent;font-size:16px"><i class="fa fa-eye" style="background:transparent;margin-left: 10px; "> </i> View all</button>
  

      <div class="yourfolders" style="margin-left: 1%">
 <?php
$query = "SELECT * FROM folder where user_phone={$_SESSION['phone']} ORDER BY datetime DESC LIMIT 4";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

for ($i = 1; $i <= $total; $i++) {
    $result = mysqli_fetch_assoc($data);
?>
<form  method="post">
<div class="Rectangle1" style="width:250px; height:80px;float:left;margin-left:5%;margin-top:16px;  border-radius: 5px;border-radius: 5px;
border-radius: 5px;
background: rgba(93, 119, 125, 0.30); box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">  <i class="fa fa-folder-o" style="font-size:27px; background:transparent;margin-left: 10px; margin-top: 20px;"></i>

  <input  class="Rectangle1_name" type="submit" style="border: none; font-size:18px; margin-left: 1%;margin-top: 0;
background: transparent;" name="folder_click" value=<?php echo $result['folder_name'];?>>
<button type="button" onclick="hideshow('popdetails')" name="det_folder" style="border:none; background:transparent; float:right; margin-right: 5px; margin-top:20px;"><i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size:15px;background-color: transparent;"></i></button>
 

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


    <button style="border: none; font-size:18px; background:white; margin-left:5%;margin-top:6%">
      <a href="filess.php" style="text-decoration: none;"><p style="background:white; color: black; font-weight: 300; font-size:20px"> My Files</p> </a></a></button>
      <button style=" border:none; background:transparent;font-size:16px" onclick="togglePopup()"><i class="fa fa-upload" style="background:transparent;margin-left: 280px; "> </i> Upload</button>
      <button style=" border:none; background:transparent;font-size:16px"><i class="fa fa-eye" style="background:transparent;margin-left: 10px; "> </i> View all</button>
  <br>
  <br>
    <!-- The upload file popup -->
    <div id="fileUploadPopup" class="popup_up">
        <span class="popup_up-close" onclick="togglePopup()" style="background:transparent; font-size: 30px">&times;</span>
        <h2 style="text-align:center; background:transparent">Upload a File</h2>
        <form action="process_uploadfile.php" method="post" enctype="multipart/form-data" style="margin-top: 8%; background-color:transparent; margin-left: 80px; font-size: 20px;font-family: serif;">
            <input type="file" name="uploaded_file" required style="background:transparent; font-size: 15px;">
            <input type="submit" name="upload_btn" value="Upload File" style="background:#7B2DE4; color:white; font-size:15px; height:40px; width:100px;border-radius: 5px; border: none;">
        </form>
    </div>

    <!-- JavaScript to toggle the popup -->
    <script>
        function togglePopup() {
            var popup = document.getElementById('fileUploadPopup');
            popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
        }
    </script>
  
  



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

<div class="col-3 col">
  <button style="border: none; font-size:18px; background:white; border-radius:20px;margin-left:6%"><a href="sharedwithme.php" style="text-decoration: none;"><h3 style="background:transparent; color: black; font-weight:300;margin-top:55px;">Shared with me</h3></a></button>
<button style="border: none; font-size:18px; font-family: serif; background:transparent; border-radius:20px; float:right;margin-top: 55px; margin-right:6%;color: #7B2DE4;"> Filter <i class="fa-solid fa-arrow-up-short-wide" style="background:transparent;"></i></button>

<div class="sharedFile">
  <i class="fa fa-file-o" style="margin-left:20px; font-size:25px;margin-top: 15px; background-color:transparent;"></i> File name <i class="fa fa-download" style="float:right; margin-right:20px;margin-top: 20px; background-color: transparent;"></i>
  
</div>

<button style="border:none; height: 45px;width: 341px; margin:30px;background: #7B2DE4; color: white; border-radius:20px; font-size: 20px; bottom:0">See all</button>

  </div>
  
</body>
</html>
<?php
}
?>