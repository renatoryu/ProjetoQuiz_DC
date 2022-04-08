<?php
session_start();
ob_start();
//Verifica se botao cadastrar foi selecionado
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if ($btnCadUsuario) {
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	$erro = false;

	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);

	if (in_array('', $dados)) {
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	} elseif ((strlen($dados['senha'])) < 6) {
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	} elseif (stristr($dados['senha'], "&")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( & ) utilizado na senha é inválido";
	} else {
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='" . $dados['usuario'] . "'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}

		$result_usuario = "SELECT id FROM usuarios WHERE email='" . $dados['email'] . "'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}


	//var_dump($dados);
	if (!$erro) {
		//O código a baixo criptografa a senha 
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
						'" . $dados['nome'] . "',
						'" . $dados['email'] . "',
						'" . $dados['usuario'] . "',
						'" . $dados['senha'] . "'
						)";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if (mysqli_insert_id($sql)) {
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: ../index.php");
		} else {
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link href="../img/icon.png" rel="icon">
	<link rel="stylesheet" href="../css/estilo1.css" type="text/css">
	<link href="img/icon.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="../css/but2.css" />
	<link rel="stylesheet" type="text/css" href="../css/but1.css" />
	<link rel="stylesheet" type="text/css" href="../css/style5.css" />


</head>

<body>
	<a href="../index.php" class="hvr-sweep-to-left">Voltar</a>
	<div class="container">
		<div class="login">
			<h1>Cadastro</h1>
			<?php
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form method="POST" action="">
				<!--<label>Nome</label>-->
				<input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control"><br>

				<!--<label>E-mail</label>-->
				<input type="text" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>

				<!--<label>Usuário</label>-->
				<input type="text" name="usuario" placeholder="Digite o usuário" class="form-control"><br>

				<!--<label>Senha</label>-->
				<input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

				<input type="submit" name="btnCadUsuario" value="Cadastrar" class="button" /><br><br>

				<a href="cadastro.php">Lembrou? Clique aqui para logar</a>
			</form>
		</div>
	</div>

</body>

</html>