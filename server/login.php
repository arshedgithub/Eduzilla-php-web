<?php

include_once("./db.php");

if(!(isset($_POST['username'])&&isset($_POST['password']))){
    include "index.html";
    die();
}

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select user,pass from login.limit1 where user='".$username."' AND pass='".$password."'";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    echo("You Have Successfuly Logged in");
    setcookie("username", $username, time()+2*60 )
    exit();
}else{
    echo("Invalid Login");
    exit();
}

?>
