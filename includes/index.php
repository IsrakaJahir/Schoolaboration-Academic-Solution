<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
   
    <title></title>
 
   <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

   <style> 

.feature-list {
  display: flex;
  padding: 1rem;
}
.feature {
  border: 1px solid #ddd;
  border-radius: 5px;
  margin: 0.5rem;
  width: 220px;
  box-shadow: 2px 4px 10px 2px #888888;
  height: 140px;
 background-color: linear-gradient(269deg, rgba(118, 147, 203, 0.49) 1.49%, rgba(118, 203, 195, 0.15) 100%);;
}
.col-3{
    width: 100%;
    height: 1000px;
    background: linear-gradient(270deg, rgba(12.50, 0, 255, 0.12) 38%, rgba(87, 199, 228, 0.12) 62%, rgba(118.39, 203.42, 194.93, 0.09) 100%, rgba(236, 220, 71, 0) 100%);
    border-bottom: 1px solid #BFBFBF;
}
.contact{
    margin-top: 120px;
    margin-right: 50px;
    width: 35%;
    float: right;
    height: 300px;
}
input{
        font-size: 16px;
        font-family: serif;
        border-top: none;
        border-right: none;
        border-left: none;
        width: 380px;
        letter-spacing: 0.1rem;
        padding-top: 30px;
        border-color: lightgray;
        background-color:rgba(236, 220, 71, 0);
}
.header {
  width: 100%;
  display: block;
  height: 70px;
  position: fixed;
  top: 0;
  background-color: white;
}
.row {
    width: 100%;
  display: block;
  float: left;
  height: 100px;
  box-sizing: border-box;
}
.row-1 {
  width: 30%;
 
}
.row-2 {
  width: 70%;
  float: right;
  
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  top: 0;
  

}

li {
  float: right;

}

li a {

  text-decoration: none;
  display: block;
  text-align: center;
  padding: 28px 35px;
  color: black;
  font-size: 15px;
 
}

li a:hover {
  background-color: #e8eaed;
}
.col{
    width: 100%;
    height: 543px;
    margin-top: 70px;
    border-top-right-radius: 50px;
    border-top-left-radius: 50px;
    background: linear-gradient(270deg, rgba(12.50, 0, 255, 0.12) 38%, rgba(87, 199, 228, 0.12) 62%, rgba(118.39, 203.42, 194.93, 0.09) 100%, rgba(236, 220, 71, 0) 100%);
}
.col-1{
    letter-spacing: 0.1rem;
  width: 55%;
  float: left;
}
.col-2 {
  width: 45%;
  float: right;
  
}
.footer-1{
    width: 30%;
    float: left;
    margin-left: 30px;
    border-right: 1px solid #BFBFBF;
}
.footer-2{
    width: 35%;
    margin-left: 70px;
    border-right: 1px solid #BFBFBF;
    font-style: normal;
    line-height: 1.5;

   }
.footer-2 a{
    text-decoration: none;
    color: black;
}
.footer-3{
    width: 30%;
    margin-left: 70px;
    float: left;
    
}

.footer{
  width: 100%;
  display: flex;
  height: 200px;
  box-sizing: border-box;
  font-size: 18px;
  margin-top: 30px;
}

.feature p{
    text-align: center;
    font-size: 22px;
    color: black;
    font-weight: 400;
    letter-spacing: 0.1rem;
}
.feature a{
    text-decoration: none;
    color: black;
    font-size: 13px;
}
.feature h2{
    text-align: center;
}


   </style>
</head>
<body>
    <div class="main-content">
    <div class="header">
     <div class="row-1 row">
      <img src="images/logo.png" style="height: 60px; width: 150px;" >
     </div>    
    <div class="row-2 row">
      <ul>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signup.php">SIGN UP</a></li>
  <li><a href="#about">ABOUT US</a></li>
  <li><a href="#contact">CONTACT</a></li>
  <li><a href="index.php">HOME</a></li>
</ul>    
  </div>
    </div>
    <div class="col">
        <div class="col-1">
            <h2 style="margin-left:30px; font-size: 34px; font-weight: 100; margin-top: 100px; ">
                Unlock Your Potential 
            </h2>
            <h1 style="margin-left: 30px; font-size: 38px;">
                Elevate Your Student Life with our AI-Powered Taskmaster
            </h1>
            <h3 style="margin-left: 30px; font-size:20px; font-weight: 100; ">Stay Organized, Crush Stress, and Supercharge Productivity
            </h3><br>
            <button style="margin-left:200px; height: 50px; width: 200px; border: none; border-radius: 30px; background-color: rgba(118.39, 203.42, 194.93, 0.45) ; font-size: 18px; font-family: serif;">Learn More</button>

        </div>
        <div class="col-2">
            <img src="images/laptop.png" style="height: 350px; width: 550px; margin-top: 30px;">
            
        </div>
    </div>
</div>
<div class="col-3">
    <div class="contact" id="contact">
        <h2 style="font-weight: 300; font-family: serif; letter-spacing: 0.1rem; font-style: italic;"> We Listen <br>Your Prosper</h2>
        <input type="text" placeholder="Name"id="name"><br><br>
        <input type="text" placeholder="Email"id="email"><br><br>
              <input type="text" placeholder="Share Your Thoughts"id="share"><br><br><br>
              <button style="border: none; font-size: 17px;letter-spacing: 0.1rem; font-family:serif; border-radius: 30px; background-color: #CCCCFF ;color: gray; height: 30px; width:100px; cursor:pointer;"><i class="fa fa-paper-plane" aria-hidden="true" style="color:mediumpurple;"></i>
Send</button>
    </div>
<section class="feature-list">
      <div class="feature" style="margin-top:120px;">
        <a href="note_storage.php"><p><i class="fa-solid fa-file-invoice fa-lg" style="color: #22963f;"></i><br><br>Note Storage</p></a>
      </div>
      <div class="feature" style="margin-top:120px;">
 <a href="course.php"><p><i class="fa-solid fa-folder fa-lg" style="color: #279689;"></i><br><br>Courses</p></a>
    </div>
    <div class="feature" style="margin-top:120px;">
     <a href="todolist.php"><p><i class="fa-solid fa-list-check fa-lg" style="color: #8b276c;"></i><br><br>To-do list</p></a>
    </div>
  </section>
    <section class="feature-list">
    <div class="feature">
      <a href="lock.html"><p><i class="fa-solid fa-user-lock fa-lg" style="color: #181a68;"></i><br><br>App block</p></a>
    </div>
    <div class="feature">
      <a href="team_project.html"><p><i class="fa-solid fa-people-group fa-lg" style="color: #d57e1a;"></i><br><br>Team project</p></a>
    </div>
    <div class="feature">
      <a href="news.html"><p><i class="fa-regular fa-newspaper fa-lg" style="color: #d0e723; position:relative;"></i><br><br>Campus News</p></a>
    </div>
  </section>
  <p  id="about" style="margin-top: 130px;margin-left:250px; margin-right:250px; font-family:serif;font-size: 17px; letter-spacing:0.05rem; line-height:2rem; font"><strong style="margin-left: 320px; font-size:20px">About Us</strong><br><br>

As students ourselves, we've personally experienced the overwhelming nature of academic life. We've grappled with generating priority-based to-do lists, keeping track of deadlines, prioritizing tasks, and collaborating with fellow students effectively. It became clear that there was a need for a comprehensive solution that understands the intricacies of student life. Upon researching existing web applications, we discovered that most were either too simplistic or overly complex. Moreover, the lack of collaboration features limited the potential for understanding diverse perspectives.

</p>
</div>

    
    <div class="footer">
        <div class="footer-1">
            <h4 style="">Contact Us</h4>
            <a href="mabeeansuukyi00@gmail.com">schoolaboration@gmail.com</a><br>
              xyz avenue, Uttara, Dhaka<br>
              0881234567</p>
        </div>
            
        <div class="footer-2">
            <div class="txt" style="margin-left:130px;">
                <br>
                <a href="index.html">Home</a><br>
                Contact Us<br>
                About Us<br>
                <a href="signup.php">Sign Up</a><br>
                <a href="login.php">Log in</a>
            </div>   
        </div>
        <div class="footer-3">
                <img src="images/logo.png" style="height: 60px; width:150px;margin-left: 70px;">
                <br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Unlock Your Potential
            <br><br>
            &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
            <a href="https://www.facebook.com/mabeean.suukyi.9/"><i class="fa fa-facebook-official fa-xl" aria-hidden="true" style="color: RGB(24, 119, 242);"></i></a>&nbsp;
            <a href="https://www.instagram.com/m_a.m_b.o/"><i class="fa fa-instagram fa-xl" aria-hidden="true" style="background:radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%); border-radius: 8px; "> </i></a>&nbsp;
            <a href="https://www.twitter.com"><i class="fa fa-twitter fa-xl" aria-hidden="true" style="color: #1DA1F2;"></i></a>&nbsp;              
            </div>

    </div>
    <div class="a" style="font-style: italic; margin-bottom: 120px;border-top: 1px solid black; margin-top: 40px;"><p style="text-align: center;">copyright 2023@schoolaboration All rights reserved</p></div>
</body>

   