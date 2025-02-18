
<?php
session_start();
error_reporting(0);
global $folder_id,$folder_name,$share;
$folder_id=$_SESSION['folder_id'];
$folder_name=$_SESSION['folder_name'];
$name = $_SESSION['nam'];
$phone=$_SESSION['phone'];



?>

<!DOCTYPE html>
<html>
<head>
    <title>Shared with me</title>
    <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous"></script>
    <style type="text/css">
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

 .popup {
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
        }

        /* Style for the close button */
        .popup-close {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }

        .plus-button {
      font-size: 50px;
      font-weight: bolder;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      outline: none;
      position: fixed;
      bottom: 20px;
      right:20px;
    }

    .plus-button:hover {
      background-color: red;
    }
     .context-menu {
      display: none;
      position: fixed;
      background: #f0f0f0;
      border: 1px solid #ddd;
      padding: 5px;
      border-radius: 5px;
    }

.popup1{
  
  width: 500px;
  height: 400px;
  background-color: white;
  position: absolute;
  border-radius: 6px;
  top: 0;
  left:50%;
  transform: translate(-50%,-50%) scale(0.5);
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
.popup1 button{
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
          height: 650px;
  width: 0;
  top: 0;
  right: 0;
  border-radius: 10px;
  background: white;
  padding-top: 20px;
 
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

    </style>
</head>
<body>
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
  <li><a href="chat.php"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Chat</a></li></ul>

  <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3>
  <ul>
    <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

  <li><a href="#about"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
</ul>

  </div>
  <div class="col-2 col">
    <div class="input-icons"style="max-width:750px;margin-left: 30px;">
   <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search" type="text" name="search">
                   <i class="fa fa-bell-o fa-beat" aria-hidden="true" style="font-size: 25px; margin-top: 14px; margin-left: 100px;"></i>
                   <i class="fa fa-user-circle fa-beat" aria-hidden="true" style="font-size: 25px; margin-top: 14px; margin-left: 150px;"></i>
        </div>
      </div>

    <a href='note_storage.php'> </a>
    <div id="image-container">
        <?php
      
        $conn = mysqli_connect('localhost','root','','schoolaboration');
        $sql = "SELECT file_name, file_path FROM sharedwithme where user_phone=$phone";
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

        
      
        ?>
    </div>
  
    <?php
if(isset($_POST['delete_click'])){




       $sql = "DELETE FROM sharedwithme WHERE file_path = ? and user_phone=?";
    $stmt = $conn->prepare($sql);
    
    // Bind the parameter
    $stmt->bind_param("si", $file_path,$phone);
    
    // Execute the statement
    $stmt->execute();
    
    // Close the statement
    $stmt->close();

  }
  // header('Location:sharedwithme.php');
// exit; 
?>
</div>
<div class="col-3 col">
    <!-- <div id="mySidenav" class="sidenav">
  <h2 style="font-family: monospace; font-weight: 300; letter-spacing: 0.05rem; font-size: 20px; margin-left: 10px;color: #818181;position: absolute;">Quick Search</h2><br><br>

  <input type="text" name=" search" placeholder="Search Friends" onclick="openNav()">
  <section style="display: flex;">
  <h2 style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;color: gray; margin-top:80px;">Friends</h2>
  <button style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;float: right; margin-top:80px;margin-left: 255px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); ">03</button>
</section>
<div class="noro">
  <a href="#"> abc@gmail.com </a>

  <button type="submit" name="update_confirm_yes" value="Yes" style="border:none; cursor: pointer; color: steelblue; font-family: serif; float: right; position:absolute; margin-left:20%;font-size: 15px;margin-top: -14px; "> <i class="fa fa-share"> </i> Share</button></div>
 
 
</div> -->
</div>
           
    <!-- <div id="main" class="profile">
        <form method="POST">
      <h1> Share with others</h1>
      <br>
      <input class="Search" type="text" name="share" placeholder="Enter friend's number">
      <br>
     
      <button type="submit" name="submit">OK</button>
      <button type="button">Cancel</button>
        </form>
</div> -->


  </div>
</div>
</div>


        <br>
        <br>


    <!-- JavaScript to toggle the popup -->
    


<!-- <div class="extra" style="position: fixed;bottom:0; left:0;"> -->
<!-- <a target="_blank" href="https://icons8.com/icon/wFoXMcszRvnr/docx">DOCX</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> --></div>



  
</body>
</html>