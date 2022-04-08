
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>
Resultados
</title>
<link rel="stylesheet" type="text/css" href="../css/style2.css"/>
<link rel="stylesheet" type="text/css" href="../css/but2.css"/>
<link rel="stylesheet" type="text/css" href="../css/but1.css"/>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link href="../img/icon.png" rel="icon">

</head>
    
<body id="cad1">
<a href="../index.php" class="hvr-sweep-to-left">Voltar</a> 
	<div id="cd1"></div> 

<?php
include "conexao.php";
$query = mysqli_query($sql,"select * from prova");
?>
<center>
<h3>Listagem de Quizes</h3>
<table border="1">
<tr id=table >
<td align="center">Nome</td>
<td align="center">Data</td>
<td align="center">Nota</td>


<style>
    h3{
        color:white;
		font-size: 30pt;
    }
	
	table{
		color:white;
		font-size: 15pt;
	}
	 body{
    background-image: url('../img/bg_listar.jpg');
    background-attachment: fixed;
    background-size: cover;
	background-repeat: no-repeat;
  
}
</style>

</tr>
<?php
	while($row = mysqli_fetch_array($query)){
		
	$id = $row['id'];
	$nome = $row['nome'];
	$hoje = $row['dt'];
	$nota = $row['nota'];
	
	
	echo"
	<tr>
	<td>$nome</td>
	<td>$hoje</td>
	<td>$nota</td>
	
	</td>";
	
	}
?>
</table>
</center>
</body>
</html>