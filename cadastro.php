<?php

include "db.php";


$msg="";


if($_POST){

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=password_hash($_POST['senha'], PASSWORD_DEFAULT);


try{


$sql=$pdo->prepare(
"INSERT INTO usuarios(nome,email,senha)
VALUES(?,?,?)"
);


$sql->execute([
$nome,
$email,
$senha
]);


$msg="Cadastro realizado!";


}catch(Exception $e){

$msg="Email já cadastrado";

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

<h2>Criar conta</h2>


<form method="POST">


<input name="nome" placeholder="Nome">


<input name="email" placeholder="Email">


<input type="password" name="senha" placeholder="Senha">


<button>Cadastrar</button>


</form>


<p><?=$msg?></p>


<a href="login.php">Login</a>


</div>


</body>

</html>