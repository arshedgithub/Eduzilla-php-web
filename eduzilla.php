<?php 
$host="localhost";
$user="root";
$password="1234"; 
$db="login";

mysqli_connect($host,$user,$password,$db);
// mysql_select_db($db);

// echo($_POST['password']);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduzilla</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
  
  <video autoplay loop muted plays-inline class="video">
    <!--<source src="images/video.mp4" type="video/mp4">-->
  </video>
  <div class="header1">
    <h2 class="w1">Eduzilla</h2>
    <img src="images/student (1).png"   img id="lo1" >
    <img src="images/student 2.png"   img id="lo1" >
    <img src="images/student3.png"   img id="lo1" >
   
    
      <!--<div id="menu-bar" class="fa-bars"></div>-->
      <nav class="navbar">
          <a href="#courses">courses</a>
          <a href="#lecturers">lecturers</a>
          <a href="#contactus">contactus</a>
          <a href="" class="login" data-toggle="modal" data-target="#myModal">login</a>
      </nav>
      
  </div>
  
        
<section class="courses" id="courses">
  <h1 class="heading">courses</h1>
  <img src="" img id="b2">
  
   <div class="subjects1">
     
     <div class="subjects">
       <img src="images/html-5.png" class="im1" alt="HTML">
       <a href="https://www.youtube.com/watch?v=UB1O30fR-EE" class="btn">html for beginners</a>
     </div>
     <div class="subjects">
        <img src="images/css-3.png" class="im2" alt="CSS">
        <a href="https://www.youtube.com/watch?v=yfoY53QXEnI" class="btn">css for beginners</a>
      </div>
      <div class="subjects">
        <img src="images/java-script.png" class="im3" alt="JAVASCRIPT">
        <a href="https://www.youtube.com/watch?v=hdI2bqOjy3c" class="btn">JS for beginners</a>
      </div>
      <div class="subjects">
        <img src="images/structure.png" class="im4" alt="REACT">
        <a href="https://www.youtube.com/watch?v=Dorf8i6lCuk" class="btn">react for beginners</a>
      </div>
   </div>
  
</section>


<section class="lecturers" id="lecturers">
  <h1 class="heading">lecturers</h1>
  
  
   <div class="teachers1">
     
     <div class="teachers">
       <img src="images/teach1.png" class="im1" alt="HTML">
       <a href="#" class="btn2">Dr.Katerina</a>
     </div>
     <div class="teachers">
        <img src="images/teach2.png" class="im2" alt="CSS">
        <a href="#" class="btn2">Dr.Smith Fernando</a>
      </div>
      <div class="teachers">
        <img src="images/teach3.png" class="im3" alt="JAVASCRIPT">
        <a href="#" class="btn2">Dr.Ariana</a>

   </div>
</section>

<section class="contactus" id="contactus">
  <h1 class="heading">contactus</h1>
  
  
   <div class="contactus1">
     
     <div class="media">
       <img src="images/whatsapp.png" class="im1" alt="whatsapp">
       <a href="#" class="m">+94 7967878903</a>
     </div>
     <div class="media">
        <img src="images/facebook.png" class="im2" alt="fb">
        <a href="www.facebook.com" class="m">www.facebook/eduzilla.com</a>
      </div>
      <div class="media">
        <img src="images/gmail.png" class="im3" alt="gmail">
        <a href="#" class="m">eduzilla@gmail.com</a>
      </div>
      <div class="media">
          <img src="images/instagram.png" class="im4" alt="insta">
          <a href="#" class="m">www.instagram/eduzilla.com</a>
      </div>
      <div class="media">
        <img src="images/linkedin.png" class="im5" alt="linkedin">
        <a href="#" class="m">www.linkedin/eduzilla.com</a>
    </div>
   </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter your User name & password</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="./form.php">
          <label for="Uname">User name:</label><br>
          <input type="text" id="username" name="username" value=""><br>
          <label for="pass">password:</label><br>
          <input type="password" id="password" name="password" value=""><br><br>
          <input type="submit" value="Submit">
      </form>
      </div> 
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">login</button> -->
        
      </div> 
    </div>

  </div>
</div>
</body>
</html>
