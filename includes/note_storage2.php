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
  <title>NoteStorage</title>
  <link rel="stylesheet" type="text/css" href="note_storage.css">
  <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous"></script>
  <style type="text/css">
    

.folder1{
margin-top: 10px;
margin-left: 10px;
height: 80%;
width:300px;
float: left;
background-color: rgb(218,227,243);
text-align: left;
margin-bottom: 5px;
margin-top: 3px;
}

input[type="submit"].folder1 {
  /* Remove button styles */
  border: none;
  background: none;
  outline: none;
  box-shadow: none;
 
}
.folder-icon {
  display: inline-block;
  font-size: 16px; /* Adjust the font size to change the size of the icon */
  margin-right: 5px; /* Add some spacing between the icon and the folder name */
}

.profile{
  right: 10px;
  float: right;
  height: 400px;
  width: 500px;
  position: absolute;
  box-sizing: border-box;
  background-color: beige;
  border:  solid black 1px;
/*    display: none;
*/
}

  </style>
</head>
<body>
  <div class="header">
     <div class="row-1 row"><br>
      <img src="images/logo.png" style="margin-left: 10%;" width="50%" height="auto">


     </div>
       <div class="row-2 row"><br>
        <h2>Note Storage</h2>
       </div>
    <div class="row-3 row">
      <br>
      <input type="text"class="Search" placeholder="Search"> 

      <div class="account">
      <?php echo $name; ?>

      <i class="fa fa-sliders" aria-hidden="true" style="font-size: 25px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 25px;"></i>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button onclick=" hideshow()"><i class="fa fa-user-circle" aria-hidden="true" style="font-size:25px;"></i></button>
    </div>
   </div>

  </div>
  <div id="main" class="profile">
    <form method="post">
    bondhumohol <br> <h1> ADD friends</h1>
     <input type="text" name="friends" placeholder="enter phone number">
     <button type="submit" name="add_friend">Confirm</button>
   
 
   <?php
   if(isset($_POST['add_friend'])){

    $f_phone=$_POST['friends'];
    echo $f_phone;
   }



   ?>

 </div>
    </form>

<div class="main-content clear">

  <div class="col-1 col">
  <ul>
  <li><a href="#"><i class="fa fa-sticky-note-o"></i><font color="red">Note Storage</font></i></a></li>
  <li><a href="course.php"><i class="fa fa-th-large" aria-hidden="true"></i>Courses</a></li>
  <li><a href="todolist.html"><i class="fa fa-tasks" aria-hidden="true"></i>To-do List</a></li>
  <li><a href="team_project.html"><i class="fa fa-users" aria-hidden="true"></i>Team Project</a></li>
  <li><a href="reminder.html"><i class="fa fa-bell-o" aria-hidden="true"></i>Reminder</a></li>
  <li><a href="calender hobe.html"><i class="fa fa-calendar-o" aria-hidden="true"></i>Calender</a></li>
  <li><a href="news.html"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Campus News</a></li>
  <li><a href="lock.html"><i class="fa fa-lock" aria-hidden="true"></i>App Lock</a></li>
  <li><a href="exam.html"><i class="fa fa-hourglass-start" aria-hidden="true"></i>Exam Preparation</a></li>
  <li><a href="index.html"><i class="fa fa-sign-out" aria-hidden="true"></i></i>Sign Out</a></li>
</ul>

  </div>

 

  <div class="col-2 col">
    <div class="box">
      .
      <div class="box1"> 
        <button type="submit" class="newfolder" onclick="openPopup()"><i class="fa fa-plus"></i> New folder</i></button>
      </div>
      <div class="box1"> 
        <a href="#"><i class="fa fa-angle-right"></i> My notes</i></a>
      </div>
      <div class="box1"> 
        <a href="sharedwithme.php"><i class="fa fa-angle-right"></i> Shared with me</i></a>
      </div>
      <div class="box1"> 
        <a href="#"><i class="fa fa-angle-right"></i> Picture to text</i></a>
      </div>


    </div>
  </div>
 
  <div class="col-3 col">
 <!--    <div class="popup">
  </div> -->
    <div class="recent">

       <h4>Recents </h4>
      <div class="recent1">
    </div>
        <div class="recent1">
    </div>
  </div>

 <div class="folders">
      <h4> Folders</h4>

        <?php
$query = "SELECT * FROM folder";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

for ($i = 1; $i <= $total; $i++) {
    $result = mysqli_fetch_assoc($data);
?>
<form  method="post">
 <div class="folder1">   <span class="folder-icon">&#128194;</span> 
  <input type="submit" class="folder1" name="folder_click" value=<?php echo $result['folder_name']; ?>> <input type="submit" name="del_folder"value="&#8758;">
    
 
  <input type="hidden" name="folder_id" value=<?php echo $result['folder_id']; ?>>
  <input type="hidden" name="folder_name" value=<?php echo $result['folder_name']; ?>>


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
    
    <div class="my_notes">
    <h4>My notes</h4> 
      <div class="notes1">
    </div>
        <div class="notes1">
    </div>
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


<script type="text/javascript">
  
  let popup=document.getElementById("popup");

function openPopup(){
  popup.classList.add("open-popup");

}
function closePopup(){
  popup.classList.remove("open-popup");

}

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