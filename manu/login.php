<?php
  if(isset($_POST['submit']))
  {
    $name=$_POST['username'];
    $pass=$_POST['password'];
    include "connection.php";
    $check="select username, password from example1 where username='$name' and password='$pass'";
    $result=mysqli_query($conn,$check);
    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['name']=$name;
        header("Location:home.php");
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>