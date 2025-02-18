
<?php



$conn = mysqli_connect('localhost','root','','schoolaboration');
session_start();
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM course_out WHERE course_name LIKE '%$search%'";
    $data = mysqli_query($conn, $query);
} else {
    $query = "SELECT * FROM course_out";
    $data = mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses</title>
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
.course-list {
  display: flex;
  padding: 2rem;
  flex-wrap: wrap;
  width: 90%;
  height: auto;
}
.course {
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 1rem;
  margin: 1rem;
  width: 250px;
  box-shadow: 2px 4px 10px 2px #888888;
}

.course img {
  max-width: 100%;
  height: 150px;
}

.col {
  display: block;
  float: left;
  height: 651px;
  box-sizing: border-box;
}
.col-1{
  width: 15%;
  background: white;
  position: fixed;
}

.col-2 {
  width: 85%;
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


   .input-field {
            width: 70%;
            padding: 8px;
            text-align: center;
            border: none;
            border-radius: 10px;
            opacity: 0.5;
            background: rgba(185, 147, 214, 0.23);
            margin-left: 10%;
        }
        input{
          margin-top: 12px;
          
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
        .course h2 {
  font-size: 1.2rem;
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}
.course p {
  font-size: 0.9rem;
  color: #555;
}

.course span {
  display: block;
  font-weight: bold;
  margin: 0.5rem 0;
}

.course button {
  background-color: #A7A9EA;;
  color: black;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 600;
}

.course button:hover {
  background-color: #555;
  color: white;
}
  </style>
  
</head>
<body>
    <div class="col-1 col" style="background: #A7A9EA;">
        <img src="images/logo.png" style="width: 160px; height:60px" >
    <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:10px;">Menu</h3>

  <ul>
    <li><a href="dashboard.php"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
  <li><a href="note_storage.php"><i class="fa fa-sticky-note-o fa-beat"> </i> Note Storage</i></a></li>
  <li><a href="course.php"><i class="fa-regular fa-folder-open fa-beat"></i> Courses</a></li>
  <li><a href="todolist.php"><i class="fa-solid fa-list-check fa-beat"></i> To-do List</a></li>
  <li><a href="#about"><i class="fa fa-users fa-beat"></i> Team Project</a></li>
  <li><a href="news.html"><i class="fa fa-newspaper-o fa-beat" aria-hidden="true"></i> Campus News</a></li>
  <li><a href="#about"><i class="fa fa-lock fa-beat" aria-hidden="true"></i> App Lock</a></li>
  <li><a href="chat.php"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Chat</a></li></ul></ul>

  <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3>
  <ul>
    <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

  <li><a href="#about"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
</ul>
    </div>

    <div class="col-2 col">
        <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field" placeholder="Search for Courses" type="text" name="search">
           <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 25px; margin-top: 15px; margin-left:10%;"></i>
           <i class="fa fa-user-circle" aria-hidden="true" style="font-size:25px; margin-left: 15%; margin-top:15px"></i>       
        </div>

        <div class="course-list" >
            <?php
            $query = "SELECT * FROM course_out";
            $data = mysqli_query($conn, $query);

            while ($result = mysqli_fetch_assoc($data)) {
            ?>
            <form action="course.php" method="POST">
                <div class="course">
                    <h2><?php echo $result['course_name'] ?></h2>
                    <img src="<?php echo $result['course_pic']; ?>" width="200px" height="auto">
                    <p>description for Course</p>
                    <span><input type="hidden" name="course_id" value="<?php echo $result['course_id']; ?>"></span>
                    <button name="course_click">View</button>
                </div>
            </form>
            <?php
            }
            ?>
        </div>
    </div>

    <?php
    if (isset($_POST['course_click'])) {
        $course_id = ($_POST['course_id']);
        $_SESSION['course_id'] = $course_id;
    ?>
        <script>
            window.location.href = "display_course.php";
        </script>
    <?php
    };
    ?>
</body>
</html>





