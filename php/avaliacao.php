
<style>
    h1{
        color:white;
		font-size: 30pt;
		
    }
	
	
	 body{
    background-image: url('../img/bg_prova.jpg');
    background-attachment: fixed;
	background-size: cover;
	text-align: left;
	color:white;
	font-size: 12pt;
	background-repeat: no-repeat;
  
}

#perguntas {
 font-size: 15pt;
}

</style>

	<link rel="icon" href="../img/icon.png">
	<a href="../index.php" class="hvr-sweep-to-left">Voltar</a><br>
	


	<?php
	$hoje = date('d/m/Y');

	session_start();
	if (!empty($_SESSION['id'])) {
		echo "Olá " . $_SESSION['nome'] . ", seja bem vindo ao nosso Quiz do Universo DC.<br>";
		echo "Hoje é dia " . $hoje . "<br><br>";
	} else {
		
		header("Location: login.php");
	}

	?>

	<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Prova</title>
		
		
		<link rel="stylesheet" type="text/css" href="../css/but2.css" />
		<link rel="stylesheet" type="text/css" href="../css/but1.css" />
		<link rel="stylesheet" type="text/css" href="../css/but3.css" />
	

	</head>

	<body>


		<h1 >Prova de Super Heróis da DC Comics</h1>

		<form action="prova.php" method="POST">
		<div id="perguntas">
			<label> 1)Quando surgiram os principais heróis do Universo DC?</label><br>
			<input type="radio" name="p1" value="a">a)1950<br>
			<input type="radio" name="p1" value="b">b)1952<br>
			<input type="radio" name="p1" value="c">c)1940<br>
			<input type="radio" name="p1" value="d">d)1942<br>
			<br><br>

			<label> 2)Qual destes super-heróis não fazem parte do Universo DC?</label><br>
			<input type="radio" name="p2" value="a">a)Batman<br>
			<input type="radio" name="p2" value="b">b)Homem-Aranha<br>
			<input type="radio" name="p2" value="c">c)Superman<br>
			<input type="radio" name="p2" value="d">d)Batgirl<br>
			<br><br>

			<label> 3)Quando foi a primeira aparição de Batman?</label><br>
			<input type="radio" name="p3" value="a">a)1940<br>
			<input type="radio" name="p3" value="b">b)1938<br>
			<input type="radio" name="p3" value="c">c)1939<br>
			<input type="radio" name="p3" value="d">d)1942<br>
			<br><br>

			<label> 4)Qual é a profissão de Clark Kent?</label><br>
			<input type="radio" name="p4" value="a">a)Repórter<br>
			<input type="radio" name="p4" value="b">b)Policial<br>
			<input type="radio" name="p4" value="c">c)Detetive<br>
			<input type="radio" name="p4" value="d">d)Advogado<br>
			<br><br>

			<label> 5)Qual é a identidade secreta de Batman?</label><br>
			<input type="radio" name="p5" value="a">a)Clark Kent<br>
			<input type="radio" name="p5" value="b">b)Bruce Banner<br>
			<input type="radio" name="p5" value="c">c)Bruce Wayne<br>
			<input type="radio" name="p5" value="d">d)Peter Parker<br>
			<br><br>

			<label> 6)Por quem a Batgirl (Betty Kane) foi substituída em 1967?</label><br>
			<input type="radio" name="p6" value="a">a)Barbara Gordon<br>
			<input type="radio" name="p6" value="b">b)Becca Gordon<br>
			<input type="radio" name="p6" value="c">c)Martha Parker<br>
			<input type="radio" name="p6" value="d">d)Louis Lane<br>
			<br><br>

			<label> 7)De quem a Batgirl é filha?</label><br>
			<input type="radio" name="p7" value="a">a)James Gordon<br>
			<input type="radio" name="p7" value="b">b)Bruce Wayne<br>
			<input type="radio" name="p7" value="c">c)Dick Grayson<br>
			<input type="radio" name="p7" value="d">d)Clark Kent<br>
			<br><br>

			<label> 8)Qual a identidade da versão mais famosa do Flash?</label><br>
			<input type="radio" name="p8" value="a">a)Jay Garrick<br>
			<input type="radio" name="p8" value="b">b)Wally West<br>
			<input type="radio" name="p8" value="c">c)Bart Allen<br>
			<input type="radio" name="p8" value="d">d)Barry Allen<br>
			<br><br>

			<label> 9)Quem é a fundadora da Liga da Justiça na Era Prata?</label><br>
			<input type="radio" name="p9" value="a">a)Batgirl<br>
			<input type="radio" name="p9" value="b">b)Mulher Maravilha<br>
			<input type="radio" name="p9" value="c">c)Supergirl<br>
			<input type="radio" name="p9" value="d">d)Mulher-Gato<br>
			<br><br>

			<label> 10)Qual destes poderes não é proporcionado pelo anel do Lanterna Verde?</label><br>
			<input type="radio" name="p10" value="a">a)Invulnerabilidade<br>
			<input type="radio" name="p10" value="b">b)Capacidade de voar<br>
			<input type="radio" name="p10" value="c">c)Criação de qualquer coisa<br>
			<input type="radio" name="p10" value="d">d)Super velocidade<br>
			</div>
			<br><br>
				<div class="wrapper">
					<div class="btn">
						<button type="submit">Enviar Respostas</button>
					</div>
				</div>



						<!--<input class="enviar" type="submit" value="Enviar Respostas">-->
		</form>
	</body>

	

	</html>