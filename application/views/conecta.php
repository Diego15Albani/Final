<?php
   
   $host = "localhost"; 
   $usuario = "root"; 
  $senha = ""; 
  $dbase = "veiculo"; 
$con = mysqli_connect($host, $usuario, $senha, $dbase); 
  if (!$con) {
   echo "Erro de conex�o ao banco de dados!";
 exit();
}
?>
