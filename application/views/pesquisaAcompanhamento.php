<!DOCTYPE html>
<html>

<head>

 <style type="text/css">
table{
	font-size: 12px; 
	}
</style>

	<script>
	
	$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal').find(".modal-content").html("");
			});
			
			</script>
			</head>
<body>

<b>	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	    </div>
	  </div>
	</div>
<?php
include "menucadastro.php";
include "conecta.php";
@session_start();
$nivel = $_SESSION['nivel'];
if($nivel=='0'){
    $situacao='disabled';
}
if($nivel=='1'){
$situacao='enabled';
}
?>

    <section class="content">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="panel panel-info">
                        <div class="panel-heading">
                        <center>
                        <h3>
                          Pesquisa Acompanhamento
                            </h3>
                            </center>
                        </div>
                       
                    </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                              <th>status</th>
                                              <th>Venda</th>
                                              <th>Opção</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      	$sql = "select * from acompanhamento";
	
	 $editar = mysqli_query($con, $sql);
     while ($l = mysqli_fetch_array($editar)){	
   $codacompanhamento = $l['cod_acompanhamento'];  
    $status = $l['status'];
    $codvendas = $l['cod_vendas'];
    
	echo "
      
      <tr class=success>
      <td> $status </td>
      <td> $codvendas </td>
      <center>  
    <td align=center> <a href=../editar/editarAcompanhamento?codigo=$codacompanhamento data-toggle=modal data-target=#myModal>
      <button type='button' class='btn btn-primary btn-xs'>Visualizar Cadastro</button> </td>  
 </a> 
                              
      </tr>
 </a>                                   
      </tr>
      ";
      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
     
            <!-- #END# Exportable Table -->
        </div>
    </section>

</body>

</html>