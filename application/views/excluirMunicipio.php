<!DOCTYPE html>
<html lang="pt-br">
	<head>  
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Excluindo...</title>
	</head>
	<body>
      <?php
			include "conecta.php";
			$Vcodigo=$_GET["codigo"];

			$apagar="delete from cidade where idcidade='$Vcodigo'";
			if(mysqli_query($con,$apagar)){
				echo"<script>alert('Municipio Excluido com Sucesso!');</script>";
				echo "<script>window.location ='../pesquisas/pesquisamunicipio';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir Municipio!');</script>";
				echo "<script>window.location ='../pesquisas/pesquisamunicipio';</script>";
			}
		?>
	</body>
</html>
