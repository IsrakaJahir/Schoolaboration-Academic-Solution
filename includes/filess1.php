
<?php
session_start();
global $folder_id,$folder_name,$share;
$folder_id=$_SESSION['folder_id'];
$folder_name=$_SESSION['folder_name'];
$name = $_SESSION['nam'];

echo "$folder_name";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Files</title>
    <style type="text/css">
        
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

.profile{
  right: 10px;
  float: right;
  height: 400px;
  width: 300px;
  position: absolute;
  box-sizing: border-box;
  background-color: beige;
  border:  solid black 1px;
 /* display: none;*/
}



    </style>
</head>
<body>
    <a href='note_storage.php'> <--</a>
    <div id="image-container">
        <?php
        $conn = mysqli_connect('localhost','root','','schoolaboration');
        $sql = "SELECT file_name, file_path,file_id FROM files where folder_id=$folder_id";
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
            <div class="folder">
    <div class="file">
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
<!--          <div class="popup1" id="popup1">
      <div class="popup_text"> -->
        <br>
        <br>
<div id="main" class="profile">
        <form method="POST">
      <h1> Share with others</h1>
      <br>
      <input class="Search" type="text" name="share" placeholder="Enter friend's number">
      <br>
     
      <button type="submit" name="submit">OK</button>
      <button type="button">Cancel</button>
        </form>
</div>


  </div>
</div>
<?php




?>








  <button onclick="togglePopup()"class="plus-button">+</button>

    <!-- The popup -->
    <div id="fileUploadPopup" class="popup">
        <span class="popup-close" onclick="togglePopup()">&times;</span>
        <h2>Upload a File</h2>
        <form action="process_upload.php" method="post" enctype="multipart/form-data">
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


<div class="extra" style="position: fixed;bottom:0; left:0;">
<a target="_blank" href="https://icons8.com/icon/wFoXMcszRvnr/docx">DOCX</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></div>



    <?php
      if(isset($_POST['delete_click']))
        {
         $file_id=($_POST['file_id']);
         $file_path=($_POST['file_path']);


         $_SESSION['file_id']=$file_id;
         $_SESSION['file_path']=$file_path;


         ?>
         <script>
          window.location.href="delete_file.php";
         </script>
         <?php

       };
          if(isset($_POST['share_click']))
        {
         $file_id=($_POST['file_id']);
         $file_path=($_POST['file_path']);
         $file_name=($_POST['file_name']);
         // $share=$_POST['name'];


         $_SESSION['file_id']=$file_id;
         $_SESSION['file_path']=$file_path;
         $_SESSION['file_name']=$file_name;
?>
        <div class='filenamebox' style=" right: 8%;
    position: absolute;
    height: 30px;
    width: 10%;
    top: 20%; position: absolute;"><?php echo $file_name;?>
</div>
<?php

       }

if(isset($_POST['submit'])){

$share=$_POST['share'];
 $_SESSION['share']=$share;
 echo $_SESSION['file_name'];

 $insert = "INSERT INTO sharedwithme (file_path, user_phone, file_name) 
           VALUES ('{$_SESSION['file_path']}', '$share', '{$_SESSION['file_name']}')";

        $upload = mysqli_query($conn,$insert);
      $conn->close();


?>

         <script>
          window.location.href="filess.php";
         </script>
         <?php

       };
       ?>


<script type="text/javascript">
  
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