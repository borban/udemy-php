<?php

if(isset($_POST['submit'])){

    $name = array("Edwin", "Student", "Benjamin", "Samid", "Mohad", "Maria", "Jane", "tom");
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){
        echo "Username has to be longer than five <br>";
    }

    if(strlen($username) > $maximum){
        echo "Username cannot be longer than 10 <br>";
    }

    if(!in_array($username, $name)){
        echo "Sorry, you are not allowed";
    }
    else{
        echo "Welcome!";
    }

}

?>