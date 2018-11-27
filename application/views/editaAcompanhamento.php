<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Acompanhamento</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
table{
	font-size: 12px; 
	}
</style>

<script>

function troca(){

       if(document.getElementById("botao").value=='Editar'){
      document.getElementById("status").disabled = false; // Habilitar
      document.getElementById("vendas").disabled = false; // Habilitar
      document.getElementById("botao").value = 'Salvar';
      document.getElementById("excluir").disabled = true; // Habilitar
}
else{
document.formulario.submit();
}
}


</script>

</head>

<body>
<a href=../pesquisas/pesquisaAcompanhamento>
 <button type="button" class="close" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
</a>

<?php

include "conecta.php";
$codigo=$_GET["codigo"];

$sql = "SELECT * FROM acompanhamento WHERE cod_acompanhamento='$codigo'";

      $editar = mysqli_query($con,$sql);
      list($codacompanhamento,$status,$vendas) = mysqli_fetch_row($editar);

  ?>
  
   <div class="panel-body">
   
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="formulario"  action="../Editar/attAcompanhamento"  method="POST" role="form">
                                        <div class="panel-body">
                                           
                                            	<label>Codigo</label><br>
                                            
							                           	<input type="tex" name="codigo1" value=<?php echo $codacompanhamento ?> disabled>
							                          
							                           	 <input TYPE="hidden" name="codigo" value="<?php echo $codacompanhamento?>">
 
                                                <br><label>Status</label><br>
							                           	<input type="tex" name="status" id="status" value="<?php echo $status ?>" disabled>
                                                         
                                                           <br><label>Vendas</label><br>
							                           	<input type="tex" name="vendas" id="vendas" value="<?php echo $vendas ?>" disabled>
                                                          
                                                          
                 <br>
                 <br>
                                                       	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "../editar/excluirAcompanhamento?codigo=$codacompanhamento";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
