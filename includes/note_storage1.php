<?php
session_start();

// Get the stored name from the session
$name = $_SESSION['nam'];

$conn = mysqli_connect('localhost', 'root', '', 'schoolaboration');
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
}

.col-2 {
  width: 60%;
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
  
  margin-top: 20%;
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
            background: rgba(185, 147, 214, 0.23);
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



  </style>
  
</head>
<body>
  <div>
  <div class="col-1 col" style="background: linear-gradient(270deg, #8CA6DB 0%, rgba(185, 147, 214, 0.85) 100%);;">
    <img src="images/logo.png" style="width: 170px; height:60px" >
    <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:10px;">Menu</h3>

  <ul>
    <li><a href="dashboard.html"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
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
  <!--   <button type="submit" class="newfolder" onclick="openPopup()"><i class="fa fa-plus"></i> New folder</i></button> -->
  <button  type="submit" onclick="openPopup()" style="float: right; margin-top: 5%; margin-right: 8%; border: none; background: white; font-family: serif; font-size: 17px;">+ Create New Folder</button>

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

  <div class="col-2 col">
    <div class="input-icons"style="max-width:1000px;margin-left:5%; float: left;border: none;">
        <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search for Files or Folders" type="text" name="search">
                   <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 25px; margin-top: 15px; margin-left:6%;"></i>
                   <i class="fa fa-user-circle" aria-hidden="true" style="font-size:25px; margin-left: 11%; margin-top:15px"></i>
        </div>
      </div>

      <div class="yourfolders" style="color: black;height:auto; width: 90%">
   <div class="row-1" style="height: auto;">
    <br>
    <button style="border: none; font-size:18px; font-family: serif; background: white; margin-top: 15px;"><a href="youfolder.php"> Your Folders </a></button>
  </div><br>

  
 <?php
$query = "SELECT * FROM folder LIMIT 2";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

for ($i = 1; $i <= $total; $i++) {
    $result = mysqli_fetch_assoc($data);
?>
<form  method="post">
<div class="Rectangle1" style="width:200px; height:100px;float:left;margin-left:5%;margin-top:10px;  border-radius: 5px;background: rgba(172, 182, 229, 0.64); box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">  <span class="folder-icon">&#128194;</span> 

  <input  class="Rectangle1_name" type="submit" style="border: none; margin-top:1%; font-size:15px; font-family:serif; margin-left: 5%; background-color: white;" name="folder_click" value=<?php echo $result['folder_name'];?>> <input type="submit" name="del_folder"value="&#8758;">
    
 
  <input type="hidden" name="folder_id" value=<?php echo $result['folder_id']; ?>>
  <input type="hidden" name="folder_name" value=<?php echo $result['folder_name']; ?>>
<br>
</div>
    </form>


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
      
            ?>

                <script>
                    window.location.href=" filess.php";
                </script>

<?php
}



}
?>

</div>

  <div class="sharedwithme">
  <div class="row-2">
  
    <button style="border: none; font-size:18px; font-family: serif; background:white;"><a href="sharedwithme.php">Shared with me</a></button>
  </div><br>

<div class="Rectangle2" style="width:100%; height:auto;margin-left:5%;border-radius: 5px;background: rgba(172, 182, 229, 0.64);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
  <?php
        $phone=123;
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
              <p><?php echo $file_name; ?></p>
              <form method="post">    
              <input type="submit" name="delete_click" value="Delete">
              <input type="submit" name="share_click" onclick="openPopup()" value="Share">
              <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
              <input type="hidden" name="file_path" value="<?php echo $file_path; ?>">

         </div>
         </div>
     </a></form>
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

             

         </div>
         </div>
          </a><div class="context-menu" id="contextMenu">
     

  </div> </form>
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

    </div>
  </div></a>
</form>
            <?php
            
        }
        if ($file_extension === 'docx') {
            ?>
         <a href="<?php echo $file_path; ?>" target="hu">   
            <div class="folder">
    <div class="file">
      <img src='images/docx.png' alt="Image File">
      <p><?php echo $file_name; ?></p>
      <form method="post">    
                 <input type="submit" name="delete_click" value="Delete">
                  <input type="submit" name="share_click" onclick="openPopup()" value="Share">
              <input type="hidden" name="file_id" value="<?php echo $file_id; ?>">
              <input type="hidden" name="file_path" value="<?php echo $file_path; ?>">
    </div>
  </div></a>
</form>
  <?php
        }
        }

        // Close the database connection
      
        ?>
    </div>
  <div class="Rectangle2_name">
    <button style="border: none; margin-top:1%; font-size:15px; font-family:serif; margin-left: 5%; background-color:white;"> File Name </button>
  </div>
</div>

  

    <!-- The upload file popup -->
    <div id="fileUploadPopup" class="popup_up">
        <span class="popup_up-close" onclick="togglePopup()">&times;</span>
        <h2>Upload a File</h2>
        <form action="process_upload.php" method="post" enctype="multipart/form-data" style="margin-top: 10%">
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
  <div class="uploaad" style="margin-top:14%">
  <div class="uploadFile" style= "font-size:18px; font-family: serif; background:white; margin-left: 6%;">Upload Files</div><br>
  <div class="Rectangle3" style="width: 1000px;height: 70px; border: dotted;border-width: thin;margin-left: 5%;">
  <button onclick="togglePopup()"> <i class="fa fa-upload" style="margin-left: 470px; margin-top:1%"> </i></button>
      
    <button class="file-upload-btn" style="margin-left: 400px; margin-top: 12px; border: none;background: white; font-family: serif;"> Drag and drop file or <a href="">Browse</a></button>
  </div>
</div>
      
      <br>
      <div class="myfiles" style="top:40%">
    <button style="border: none; font-size:18px; font-family: serif; background:white; margin-left:5%">Your Files</button>
  <br>
  <div class="Files"><br>
    <button style="border: solid gray; font-size:15px; font-family: serif; background:floralwhite; margin-left:5%; width:200px; height: auto; border-width: thin; text-align: left;"> &#128193;file.zip</button>
  </div>
</div>
</div>


<script type="text/javascript">
  
  let popup=document.getElementById("popup");

function openPopup(){
  popup.classList.add("open-popup");

}
function closePopup(){
  popup.classList.remove("open-popup");

}
</script>
</body>
</html>

