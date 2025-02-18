<?php



$conn = mysqli_connect('localhost','root','','schoolaboration');
session_start();
echo($_SESSION['nam']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    
    <meta charset="UTF-8">
 <link rel="stylesheet" href="course.css">
    
   
    <title>course</title>
 
   <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="header">
     <div class="row-1 row"><br>
      <img src="images/logo.png" style="margin-left: 10%" height="65px" width="65px">
   SCHOOLABORATION

     </div>
       <div class="row-2 row"><br>
        <h2>Course Materials</h2>
       </div>
    <div class="row-3 row">
      <br>
      <input type="text"class="Search" placeholder="Search"> 

      <div class="account">
      <i class="fa fa-sliders" aria-hidden="true" style="font-size: 25px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 25px;"></i>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i class="fa fa-user-circle" aria-hidden="true" style="font-size:25px;"></i>
    </div>
   </div>

  </div>

<div class="main-content clear">

  <div class="col-1 col">
  <ul>
  <li><a href="note_storage.html"><i class="fa fa-sticky-note-o"></i>Note Storage</i></a></li>
  <li><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i><font color="red">Courses</font></a></li>
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
    <?php
$query = "SELECT * FROM course_out";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

for ($i = 1; $i <= $total; $i++) {
    $result = mysqli_fetch_assoc($data);
?>
  
     <form action="course.php" method="POST">
      <div class="box1">
        <div class="firstbox">
          <p><?php echo $result['course_name'] ?></p>
      
        <p> <img src="<?php echo $result['course_pic'];?>"  width ="200px"height="auto"></p>
        <input type="submit"  name="course_click"  value="jijiji">
         <input type="text" name="course_id" value="<?php echo $result['course_id']; ?>">

    </div> 

     </div>
   </form>
    <?php
  }
     
     ?> 
    </div>


</div>
<?php
if(isset($_POST['course_click'])) {
            $course_id=($_POST['course_id']);
            
            $_SESSION['course_id']= $course_id;
            ?> 

             <script>
                    window.location.href="display_course.php";
                </script> 
    <?php     };
           
?>
                
</body>
</html>

 