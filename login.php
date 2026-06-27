<?php

session_start();

include "db.php";


$msg="";


if($_POST){


$email=$_POST['email'];
$senha=$_POST['senha'];


$stmt=$pdo->prepare(
"SELECT * FROM usuarios WHERE email=?"
);

$stmt->execute([$email]);


$user=$stmt->fetch(PDO::FETCH_ASSOC);



if($user && password_verify($senha,$user['senha'])){


$_SESSION['usuario']=$user['nome'];


header("Location:painel.php");


}else{


$msg="Dados incorretos";


}


}


?>


<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="assets/style.css">

</head>


<body>


<div class="box">


<h2>Login</h2>


<form method="POST">


<input name="email" placeholder="Email">


<input type="password" name="senha" placeholder="Senha">


<button>Entrar</button>


</form>


<p><?=$msg?></p>


<a href="cadastro.php">
Criar conta
</a>


</div>


</body>

</html>