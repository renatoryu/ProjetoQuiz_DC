<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		
		<title>Login</title>
		<link href="../img/icon.png" rel="icon">
		<link rel="stylesheet" type="text/css" href="../css/but2.css"/>
		<link rel="stylesheet" type="text/css" href="../css/but1.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style4.css"/>
	</head>
<body>
<a href="../index.php" class="hvr-sweep-to-left">Voltar</a> 
<div class="login">
	<h1>Login</h1>
			
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg']."<br><br>";
						unset($_SESSION['msg']);
						session_destroy();
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad']."<br><br>";
						unset($_SESSION['msgcad']);
						session_destroy();
					}
				?>
	<form type="text" action="valida.php" method="post">

	<p>Usuário</p>
	<input type="text" name="usuario" placeholder="Insira seu nome de usuário">
	<p>Senha</p>
	<input type="password" name="senha" placeholder="Insira sua senha">
	
	<input type="submit" name="acessar" value="Acessar">
	
		<a href="cadastro.php">Ainda não possui uma conta?</a>

		
	
	</form>

</div>	
</body>
</html>