<?php
    session_start();
    echo $_SESSION['name'];
    include "connection.php";
    $details="select * from example1";
    $store=mysqli_query($conn,$details);
    while($row=mysqli_fetch_assoc($store)){
        echo $row['username']." ".$row['password'];
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
    <a href="logout.php">logout</a>
</body>
</html>