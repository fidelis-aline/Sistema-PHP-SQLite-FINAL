<?php

session_start();


if(isset($_SESSION['usuario'])){

    header("Location: painel.php");

}else{

    header("Location: login.php");

}

exit;

?>