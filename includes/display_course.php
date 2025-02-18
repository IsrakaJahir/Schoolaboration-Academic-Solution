<?php
session_start();
$course_folderid=$_SESSION['course_id'];
echo $course_folderid;

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

    </style>
</head>
<body>
    <a href='course.php'> <--</a>
    <div id="image-container">
        <!-- Images will be displayed here -->
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost','root','','schoolaboration');

        // Query to fetch images from the database
        $sql = "SELECT coursefile_path FROM course_material where course_id='CSE115'";
        $result = $conn->query($sql);

        // Fetch and display the images
        while ($row = $result->fetch_assoc()) {
            // $file_name = $row['file_name'];
            $file_path = $row['coursefile_path'];
       
         $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        // Display images
        if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
       // echo "<img src='$file_path' alt='$file_name'><br>";

            ?>
             <a href="<?php echo $file_path; ?>" target="hu">    
         <div class="folder">
         <div class="file">
              <img src='<?php echo $file_path; ?>'alt="Image File">
              <p><?php echo $file_name; ?></p>
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
         </div>
         </div>
          </a><div class="context-menu" id="contextMenu">
    <p onclick="deleteBox()">Delete</p>
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
    </div>
  </div></a>
            <?php
            // echo " 
            // <iframe src='$file_path' width='500' height='600' style='border: 1px solid black;'></iframe><br>";
            
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
            // echo "<iframe src='$file_path' width='500' height='600' style='border: 1px solid black;'></iframe><br>";
        }

       ?>
   

    <?php


        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

  <!--   <h2>Upload a File</h2>
    <form action="process_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" required>
        <input type="submit" name="upload_btn" value="Upload File">
    </form> -->


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

    

 <script>
    function showContextMenu(event, folderId,FileId) {
      event.preventDefault(); // Prevent the default context menu

      // Store the folder ID in a variable accessible to deleteBox() function
      window.currentFolderId = folderId;
      window.currentFileId=FileId;
  console.log("The value of num is:", window.currentFileId);

      // Show the custom context menu at the mouse pointer position
      const contextMenu = document.getElementById('contextMenu');
      contextMenu.style.display = 'block';
      contextMenu.style.left = event.pageX + 'px';
      contextMenu.style.top = event.pageY + 'px';
    }

    function deleteBox() {
      // Remove the box from the DOM
      const folder = document.querySelector('.folder');
      folder.parentNode.removeChild(folder);

      // Get the folder ID from the stored variable
      const folderId = window.currentFolderId;
      const FileId=window.currentFileId;

      // Redirect to a PHP script to perform the deletion on the server
      window.location.href = 'delete_file.php?folder_id=' + folderId + '&file_id=' + FileId;
    

    }

    // Hide the context menu when clicking anywhere else on the page
    document.addEventListener('click', function (event) {
      const contextMenu = document.getElementById('contextMenu');
      contextMenu.style.display = 'none';
    });
  </script>
</body>
</html>
