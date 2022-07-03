<?php

include_once("./db.php");

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select user,pass from login.limit1 where user='".$uname."' AND pass='".$password."'";
    $result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        echo"You Have Successfuly Logged in";
        exit();
    }
    else{
        echo( "Invalid Login");
        exit();
    }
}
        ?>

?>
