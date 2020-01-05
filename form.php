<?php

if(isset($_POST['submit'])){

    $name = array("Edwin", "Student", "Benjamin", "Samid", "Mohad", "Maria", "Jane", "tom");
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){
        echo "Username has to be longer than five ";
    }

    if(strlen($username) > $maximum){
        echo "Username cannot be longer than 10 ";
    }

    if(!in_array($username, $name)){
        echo "Sorry, you are not allowed";
    }
    else{
        echo "Welcome!";
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    <input name="username" type="text" placeholder="Enter Username">
    <input name="password" type="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
</form>


</body>
</html>