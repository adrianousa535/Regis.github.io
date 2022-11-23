<?php

session_start();
$answer = $_SESSION["answer"];
$user_answer = $_POST["answer"];

if($answer == $user_answer){
    header("Location: /Adrian/index.html");
}
else{
    echo "No nie poprawnie";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>