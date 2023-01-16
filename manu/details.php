<?php
    include "connection.php";
   $name=$_POST['uname']; 
   $pass=$_POST['pass'];
   $query="insert into example1(username,password) values('$name','$pass')";
   $result=mysqli_query($conn,$query);
   if($result){
    header("Location:login.php");
   }
?>