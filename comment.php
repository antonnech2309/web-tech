<?php
    include "config.php";
    
    if(isset($_POST['name'])) {
        $name = filter_var(trim($_POST['name']));
        $email = filter_var(trim($_POST['email']));
        $comment = filter_var(trim($_POST['message']));
        
    }

    $connection->query("INSERT INTO `comments` (`name`, `comment`, `email`) VALUES ('$name', '$comment', '$email')");
    
    header('Location: lab2.php');
?>