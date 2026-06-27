<?php

session_start();


if(!isset($_SESSION['usuario'])){

header("Location:login.php");

exit;

}

?>


<h1>
Bem vindo, <?= $_SESSION['usuario'];?>
</h1>


<p>
Você está logado no sistema.
</p>


<a href="logout.php">
Sair
</a>