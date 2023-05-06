<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    if($password === $password_confirm){
       // $password = md5($password);
        mysqli_query($conn, "INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES ('', '$name', '$email', '$login', '$password')");
        
        header('Location: ../index.html');
    }else{
        $_SESSION['message'] = "Пароли не совпадают";
    }

