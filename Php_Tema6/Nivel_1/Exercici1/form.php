<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        echo "Nombre de Usuario: " . htmlspecialchars($username) ."<br>";
    }else {
        echo "Nombre de Usuario no ha sido proporcionado" ."<br>";
    }
}

?>