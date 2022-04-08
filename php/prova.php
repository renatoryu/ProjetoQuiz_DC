<style>
	#botoes {

		font-size: 12pt;
	}


	#intro {

		font-size: 12pt;

	}

	#refazerquiz{

		font-size: 13pt;
		
	}

	body {
		background-image: url('../img/bg_prova.jpg');
		background-attachment: fixed;
		background-size: cover;
		text-align: left;
		color: white;
		font-size: 15pt;
		background-repeat: no-repeat;

	}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../img/icon.png">
	<link rel="stylesheet" href="../css/estilo1.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/but2.css" />
	<link rel="stylesheet" type="text/css" href="../css/but1.css" />
	
	<title>Gabarito</title>
</head>

<body>
	<div id="botoes">

		<a href="../index.php" class="hvr-sweep-to-left">Início</a><br>
		<a href="listarquiz.php" class="hvr-sweep-to-left">Acessar Provas</a><br>

	</div>

</body>


</html>



<?php
$hoje = date("d/m/Y");


session_start();

?>

<div id="intro">
	<?php
	if (!empty($_SESSION['id'])) {
		echo "Olá " . $_SESSION['nome'] . ", seja bem vindo à seção do Quiz.<br>";
		echo "Hoje é dia " . $hoje . "<br><br>";
	} else {
		
		header("Location: login.php");
	}
	?>
</div>
<?php
echo "<br>Gabarito<br>";

include "conexao.php";

$nota = 0;
$nome = $_SESSION['nome'];
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];
$p6 = $_POST["p6"];
$p7 = $_POST["p7"];
$p8 = $_POST["p8"];
$p9 = $_POST["p9"];
$p10 = $_POST["p10"];


if ($p1 == "c") {
	echo "1)Quando surgiram os principais heróis do Universo DC?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "1)Quando surgiram os principais heróis do Universo DC?<br>";
	echo "Errado, a resposta certa é: c)1940<br><br>";
}

if ($p2 == "b") {
	echo "2)Qual destes super-heróis não fazem parte do Universo DC?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "2)Qual destes super-heróis não fazem parte do Universo DC?<br>";
	echo "Errado, a resposta certa é: b)Homem-Aranha<br><br>";
}

if ($p3 == "c") {
	echo "3)Quando foi a primeira aparição de Batman?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "3)Quando foi a primeira aparição de Batman?<br>";
	echo "Errado, a resposta certa é: c)1939<br><br>";
}

if ($p4 == "a") {
	echo "4)Qual é a profissão de Clark Kent?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "4)Qual é a profissão de Clark Kent?<br>";
	echo "Errado, a resposta certa é: a)Repórter<br><br>";
}

if ($p5 == "c") {
	echo "5)Qual é a identidade secreta de Batman?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "5)Qual é a identidade secreta de Batman?<br>";
	echo "Errado, a resposta certa é: c)Bruce Wayne<br><br>";
}

if ($p6 == "a") {
	echo "6)Por quem a Batgirl (Betty Kane) foi substituída em 1967?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "6)Por quem a Batgirl (Betty Kane) foi substituída em 1967?<br>";
	echo "Errado, a resposta certa é: a)Barbara Gordon<br><br>";
}

if ($p7 == "a") {
	echo "7)De quem a Batgirl é filha?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "7)De quem a Batgirl é filha?<br>";
	echo "Errado, a resposta certa é: a)James Gordon<br><br>";
}

if ($p8 == "d") {
	echo "8)Qual a identidade da versão mais famosa do Flash?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "8)Qual a identidade da versão mais famosa do Flash?<br>";
	echo "Errado, a resposta certa é: d)Barry Allen<br><br>";
}

if ($p9 == "b") {
	echo "9)Quem é a fundadora da Liga da Justiça na Era Prata?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "9)Quem é a fundadora da Liga da Justiça na Era Prata?<br>";
	echo "Errado, a resposta certa é: b)Mulher Maravilha<br><br>";
}

if ($p10 == "d") {
	echo "10)Qual destes poderes não é proporcionado pelo anel do Lanterna Verde?<br>";
	echo "Correto<br><br>";
	$nota = $nota + 1;
} else {
	echo "10)Qual destes poderes não é proporcionado pelo anel do Lanterna Verde?<br>";
	echo "Errado, a resposta certa é: d)Super velocidade<br><br>";
}

echo " Parabéns! Você acertou $nota questões.";

$sql->query("INSERT INTO prova(nome, dt, nota) VALUES('$nome', '$hoje', '$nota')");

?>

<div id="refazerquiz">
<br><a href="avaliacao.php" class="hvr-sweep-to-left" align="center">Refazer Quiz</a><br><br>
</div>