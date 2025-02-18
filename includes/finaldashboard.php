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

 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="calendar_script.js" defer></script>
  <style>
  *{
  margin-top: 0;
  margin-bottom: 0;
  margin-right:0;
  margin-left: 0;
  box-sizing: border-box;
  font-family: serif;

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
  
  .course-list {
  display: flex;
  left: 25%;
  right: 9%;
  top:27%;
  position: absolute;
  display: flex;
            animation: course-list 10s infinite;
            overflow: hidden;
            }
.course {
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 1rem;
  margin: 1rem;
  width: 200px;
  box-shadow: 2px 4px 10px 2px #888888;
  left: 0;
  background: white;

 
}
@keyframes course-list {
  
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

.course img {
  max-width: 100%;
  height: 130px;
  border-radius: 5px;
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
  margin-top: 100px;
  width: 76%;
  margin-left: 11.2%;

  }
.col-1{
  width: 16%;
  margin-left: 1%;
  position: fixed;
  
}
.col-2 {
  margin-left: 17%;
 
}

.col-1 a{
  text-decoration: none;
  color: rgba(0, 0, 0, 0.65);
  font-family: serif;
  font-weight: 400;
}

li a{
  
  display: block;
  padding: 16px;
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
           
        }
         
        .icon {
            top: 20.5%;
        }
         
        .input-field {
            width: 40%;
            height: 35px;
            padding: 8px;
            text-align: center;
            border-radius: 10px;
            background: white;
            border: none;
             position: absolute;
           top: 17%;
            left:39%;
             box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
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
.wrapper{
  width: 360px;
  height: 315px;
  background:#fff;
  border-radius: 10px;
  position: static;
  font-family:serif;
   box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
   float: left;
  
  
}
.wrapper header{
    display: flex;
    padding: 10px 10px;


}
header .current-date{
  margin-top: 10px;
  font-size: 1.15rem;
  font-weight: 600;

}
header .icons span{
  height: 38px;
  width: 38px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
  cursor: pointer;
background: rgba(172, 182, 229, 0.18);
margin-left: 1rem;
margin-right: 1rem;

}
header .icons span:hover{
    background-color: #f2f2f2; 

}
.calender ul{
  display: flex;
  list-style: none;
  flex-wrap: wrap;
  text-align: center;
}
.calenders .weeks li{
  font-weight: 500;
}
.calender .days{
  margin-bottom: 8px;
  padding-left: 0;
}
.calender .days li{
  z-index: 1;
  cursor: pointer;
  margin-top: 15px;
}
.calender .days li::before{
position:absolute;
content: "";
border-radius: 50%;
height: 30px;
width: 30px;
top:50%;
left: 50%;
transform: translate(-50%,-50%);
z-index: -1;
background: rgba(172, 182, 229, 0.18);

}

.days li:hover:before{
background:#f2f2f2; 

}
.days li.active{
  color: black;
}
.days li.active:before{
  background:#c1e0e6;
}

.days li.inactive{
  color:#aaa; 
}
.calender ul li{
  position: relative;
  width: calc(100%/7);
  padding: 0;
}
.project{
  width:305px;
  height:60px;
  border-radius: 10px;
  border: 1px solid #777;
  background: rgba(217, 217, 217, 0.00);
  display: inline-block;
  margin-left: 10px;
  float: right;
  margin-top: 25px;
  border: none;

 
}
.project:hover{
  background-color: #e8eaed;;
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
  background-color: black;
  margin-right: 0;
  margin-top: 4%;
  border-radius: 20px;
  transition: 0.3s;
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
    background-color: magenta;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;    

}
.user-profile{
    align-items: center;
    height: 90px;
    width: 90px;
    border-radius: 50px;
    background-color: pink;
    position: absolute;
    margin-left: 95px;
    margin-top: 60px;
}


      </style>
</head>
<body>
  <div>
  <div class="col-1 col" style="">
    <img src="images/logo.png" style="width: 160px; height:60px" >
    <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:18px;">Menu</h3>

  <ul>
    <li><a href="dashboard.php"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
  <li><a href="note_storage.php"><i class="fa fa-sticky-note-o fa-beat"> </i> Note Storage</i></a></li>
  <li><a href="course.php"><i class="fa-regular fa-folder-open fa-beat"></i> Courses</a></li>
  <li><a href="todolist.html"><i class="fa-solid fa-list-check fa-beat"></i> To-do List</a></li>
  <li><a href="#about"><i class="fa fa-users fa-beat"></i> Team Project</a></li>
  <li><a href="#about"><i class="fa fa-newspaper-o fa-beat" aria-hidden="true"></i> Campus News</a></li>
  <li><a href="#about"><i class="fa fa-lock fa-beat" aria-hidden="true"></i> App Lock</a></li>
  <li><a href="chat.php"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Chat </a></li></ul>

  <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3><br>
  <ul>
    <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
    <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

  <li><a href="signout.php"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
</ul>

  </div>

  <div class="col-2 col">

     <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 27px; margin-top: 14px; margin-left: 70%;position: absolute;"></i>
     <i class="fa fa-group" aria-hidden="true" style="font-size: 25px; margin-top: 14px; margin-left: 75%; position:absolute;"onclick="openNavi()"></i> 
     <i style="font-size:30px;cursor:pointer; height:31px ; width:31px;border-radius:50px;background-color: black; margin-left:80%;position: absolute; margin-top: 11px;"onclick="openNav()">
       
     </i>
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavi()">&times;</a>
  <h2 style="font-family: monospace; font-weight: 300; letter-spacing: 0.05rem; font-size: 21px; margin-left: 10px;color: #818181;">Quick Search</h2>
  <input type="text" name=" search" placeholder="Search Friends" onclick="openNavi()">
  <section style="display: flex;">
  <h2 style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;color: gray; margin-top:10px;">Friends</h2>
  <button style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;float: right; margin-top:10px;margin-left: 255px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); ">03</button>
</section>
  <a href="#"> <i class="fa fa-user-circle"></i> abc@gmail.com <i class="fa fa-envelope-o" style="float: right; margin-right: 12%;transition: 0.3s;"></i></a>
  <a href="#"><i class="fa fa-user-circle"></i> abc@gmail.com <i class="fa fa-envelope-o" style="float: right; margin-right: 12%;transition: 0.3s;"></i></a>
  <a href="#"><i class="fa fa-user-circle"></i> abc@gmail.com <i class="fa fa-envelope-o" style="float: right; margin-right: 12%;transition: 0.3s;"></i></a>
 

  <div id="Request" class="requestButton">
    <a href="javascript:void(0)" class="closebutton" onclick="closeButton()">&times;</a>
<h2 style="font-family: monospace; font-weight: 300; letter-spacing: 0.05rem; font-size: 21px; margin-left: 10px;color: #818181;">Quick Search</h2>
  <input type="text" name=" search" placeholder="Search Friends" onclick="openNavi()">
  <section style="display: flex;">
  <h2 style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;color: gray; margin-top:10px;">Requests</h2>
  <button style="font-family: serif; font-weight: 300; font-size: 20px; margin-left: 10px;float: right; margin-top:10px;margin-left: 255px; border: 1px solid black;border-radius: 10px; border: none;background: rgba(85, 172, 238, 0.33); ">03</button>
</section>
  <a href="#"> <i class="fa fa-user-circle"></i> abc@gmail.com <button style="margin-left:5px;margin-right: 5px; border: none; color: indianred; font-family: serif; cursor: pointer;float: right; margin-right: 8%;"><i class="fa fa-trash-o"> </i> Delete</button><button style="border:none; cursor: pointer; color: steelblue; font-family: serif; float: right;"> <i class="fa fa-check"> </i> Confirm</button></a>
  <a href="#"> <i class="fa fa-user-circle"></i> abc@gmail.com <button style="margin-left:5px;margin-right: 5px; border: none; color: indianred; font-family: serif; cursor: pointer;float: right; margin-right: 8%;"><i class="fa fa-trash-o"> </i> Delete</button><button style="border:none; cursor: pointer; color: steelblue; font-family: serif; float: right;"> <i class="fa fa-check"> </i> Confirm</button></a>
  <a href="#"> <i class="fa fa-user-circle"></i> abc@gmail.com <button style="margin-left:5px;margin-right: 5px; border: none; color: indianred; font-family: serif;cursor: pointer; float: right;margin-right: 8%;"><i class="fa fa-trash-o"> </i> Delete</button><button style="border:none; cursor: pointer; color: steelblue; font-family: serif; float: right;"> <i class="fa fa-check"> </i> Confirm</button></a>
  <a href="#"> <i class="fa fa-user-circle"></i> abc@gmail.com <button style="margin-left:5px;margin-right: 5px; border: none; color: indianred; font-family: serif;cursor: pointer; float: right; margin-right:8%"><i class="fa fa-trash-o"> </i> Delete</button><button style="border:none; cursor: pointer; color: steelblue; font-family: serif; float: right;"> <i class="fa fa-check"> </i> Confirm</button></a>
  <button style="width: 350px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif;cursor: pointer; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="closeButton()"> See Friends</button>
  
</div>

<button style="width: 340px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="openButton()"> See Friend Requests</button>
<button style="width: 340px; height: 35px; margin-top: 30px; margin-left: 16px; font-family: serif; font-size: 18px;border-radius: 10px;opacity: 0.6;
background: rgba(185, 147, 214, 0.23); border: none;" onclick="hideshow()"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
 Add new Friend</button>
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
<script>
function openButton() {
  document.getElementById("Request").style.width = "400px";
}

function closeButton() {
  document.getElementById("Request").style.width = "0";
}
</script>
</div>

<script>
function openNavi() {
  document.getElementById("mySidenav").style.width = "400px";
}

function closeNavi() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
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
<div id="main" class="profile">
    <form method="post" action="friends.php"><br> <h2 style="text-align:center;"> Add a new friend</h2>
     <input type="text" name="friends" placeholder="Enter phone number" style="margin-left:100px; border-top: none;font-family: serif; font-size:15px; margin-top:45px; width: 50%; height:40px; background:transparent; text-align:center; border-right: none; border-left:none;"><br>
     <button type="submit" name="add_friend" style="margin-top: 60px; background-color:white;border-radius: 10px; width: 100px; height:40px; margin-left:100px; font-family:serif; font-size:20px; border:thin;">Confirm</button>
       <button name="add_friend" style="margin-top: 60px; background-color:white;border-radius: 10px; width: 100px; height:40px;  font-family:serif; font-size:20px; border:thin;"><a href="dashboard.php" style="text-decoration: none;">Cancel</a></button>
   </form>
   
 </div>

     <br><br><br>

    <img src="images/dashboard.png" style="width: 1120px; height: 250px;">
    <h3 style="position:absolute; top:11%; font-size:26px;font-family: serif;color: white; font-weight:300;left:35%">Stay Organized, Crush Stress, and Supercharge Productivity!</h3>
    <div class="input-icons"style="max-width:650px;">
   <div class="input-icons">
            <input class="input-field" placeholder="Search" type="text" name="search">
                   <i class="fa fa-search icon" style="left:56%; "></i>
        </div>
      </div>
      <br><br>
      
   <div class="row-1">
    
    <section class="course-list">
      <div class="course">
      
      <img src="images/ai.jpg">
      <p>description for Course</p>
     
      </div>
      <div class="course">
      
      <img src="images/ai.jpg">
      <p>description for Course</p>
      
    </div>
    <div class="course">
      <img src="images/ai.jpg">
      <p>description for Course</p>
      
    </div>
    <div class="course">
      <img src="images/ai.jpg">
      <p>description for Course</p>
      
    </div>
  </section>

</div>
<div class="col-3" style="">

     <div class="wrapper">
      <br>

        <h3> &nbsp;Schedule</h3>
        <br>
      
        <header>
          <div class="icons">
            <span id ="prev" class="material-symbols-rounded"> chevron_left</span>
          </div>
          <p class="current-date">May 2023</p>
          <div class="icons">
           
            <span id="next"class="material-symbols-rounded"> chevron_right</span>

             </div>

        </header>
        <div class="calender" style="width: 340px;" >
          <ul class="weeks" style="padding:0">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
            <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
          
          </ul>
          
            <ul class="days">

            <li class="inactive">30</li>
            <li onclick="handleClick()">1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
            <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li>10</li>
          <li>11</li>
            <li>12</li>
          <li>13</li>
          <li>14</li>
            <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
            <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
            <li>26</li>
          <li class="active">27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
          <li class="inactive">1</li>
            <li class="inactive">2</li>
          <li class="inactive">3</li>
          </ul>
        </div>
        
  </div>
  <button style="height: 30px;margin-left: 280px; width: 100px;background: white; border:none; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border-radius: 5px;
"><i class="fa fa-upload"> </i> Upload</button>
  <button style="height: 30px; width: 100px;background: white; border:none; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border-radius: 5px;
"><i class="fa fa-eye"> </i> View All</button>
<br>
  <div class="project" style="">
    <div style="height: 60px; width:30px; background:pink;float: left; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"></div>
<h3 style="text-align: center;line-height: 3rem;"> Bal</h3>
    
  </div><br>
        <div class="project" style="">
          <div style="height: 60px; width:30px; background:pink;float: left; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"></div>
<h3 style="text-align: center; line-height: 3rem;"> Bal</h3>
        </div>
       <div class="project" style="">
          <div style="height: 60px; width:30px; background:pink;float: left; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"></div>
<h3 style="text-align: center; line-height: 3rem;"> Bal</h3>
        </div>
       

</div>

<!-- add event end -->
</div>
</div>
</body>
 
 <script type="text/javascript">
  
  let popup=document.getElementById("popup");
    


function openPopup(){
  popup.classList.add("open-popup");

}
function closePopup(){
  popup.classList.remove("open-popup");

}

let popupleft=document.getElementById("a");
function openPopupleft(){
  popupleft.classList.add("open-popupleft");

}
function closePopupleft(){
  popupleft.classList.remove("open-popupleft");

}

function handleClick() {
      alert("You clicked the paragraph!");
    }

</script>
<script type="">
  const daysTag = document.querySelector(".days"),
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons span");

// getting new date, current year and month
let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

// storing full name of all months in array
const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                     && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
    daysTag.innerHTML = liTag;
}
renderCalendar();

prevNextIcon.forEach(icon => { // getting prev and next icons
    icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
            // creating a new date of current year & month and pass it as date value
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); // updating current year with new date year
            currMonth = date.getMonth(); // updating current month with new date month
        } else {
            date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
    });
});
</script>
</body>

</html>