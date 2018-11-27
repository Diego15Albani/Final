<?php

include 'conecta.php';
 
$status =$_POST["status"];
$venda =$_POST["venda"];

$sql = "insert into acompanhamento(status,cod_vendas) 
values('$status','$venda')";

if(mysqli_query($con,$sql)){
redirect('cadastros/cadAcompanhamento?resposta=1');
}
redirect('cadastros/cadAcompanhamento?resposta=2');
  
   

?>
