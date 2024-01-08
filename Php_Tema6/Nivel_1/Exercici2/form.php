<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['username'])){
        $_SESSION[$username] = $_POST['username'];

        echo "Nombre de Usuario: " . htmlspecialchars($_SESSION[$username]) ."<br>";
    }else {
        echo "Nombre de Usuario no ha sido proporcionado" ."<br>";
    }
}
?>