
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
			</head>
			
			
<body>

<?

include "conecta.php";
include "menucadastro.php";


if(!empty($_GET['resposta'])){

if($_GET['resposta']=='1'){
echo "<script>alert('Cadastro Efetuado com Sucesso!');</script>";
}
else{
echo "<script>alert('Erro ao Efetuar Cadastro!');</script>";
}
}


?>
    <section class="content">
        <div class="container-fluid">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <form action="<?php echo site_url("cadastros/addAcompanhamento")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro Acompanhamento</h4></li>
                                </center>
                            </ul>
                        </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Status</label>
                                            <input type="text" class="form-control" name="status" required>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                       <label>Vendas</label><br>
        <select name="venda" id="venda">
        <option>Selecione a Venda...</option>
 <?php
 $sql= mysqli_query($con, "SELECT * FROM vendas order by cod_vendas");
while ( $query2 = mysqli_fetch_array($sql))   {
 ?>
<option value="<?php echo $query2['cod_vendas']; ?>">
<?php echo $query2['cod_vendas']; ?></option>";
 <?php
  }
 ?> 
</select>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            
<center>
                                
                            <button right type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                            
                            </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>

</body>

</html>