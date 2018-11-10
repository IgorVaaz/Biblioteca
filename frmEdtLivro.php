<?php
    $conexao = mysql_connect("localhost","root",""); 
	if (!$conexao){
		echo "Erro ao se conectar MySql <br/>" ; 
		exit;
    }
    $banco  = mysql_select_db("biblioteca");
	if (!$banco){
		echo "Erro ao se conectar ao banco biblioteca...";
		exit;
    }

      $id = trim($_REQUEST['id']); 
    $rs = mysql_query("SELECT * FROM  livro where id=".$id);
    $edita = mysql_fetch_array($rs); 
   // echo $edita['descricao']; 
?>

<html>
    <head>
       <meta charset="UTF-8">
       <title>Editar Livro</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>          
    <body>
      <div class="container col-md-8">
         <h1>Editar Livro</h1>  
         <br>
         <form id="frmEdtLivro" name="frmEdtLivro" method="POST" action="edtLivro.php">
                <div class="form-group">
                    <label for="lbltxtId">ID:  <?php echo $edita['id'] ?> </label>
                    <input type="hidden" id="txtId" name="txtId" value="<?php echo $edita['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="lblTitulo">Titulo: </label>
                    <input type="text" id= "txtTitulo" name="txtTitulo" 
                    class="form-control col-md-5" value = "<?php echo $edita['titulo']?>">
                </div>
                <div class="form-group">
                    <label for="lblAutor">Autor: </label>
                    <input type="text" id= "txtAutor" name="txtAutor" 
                    class="form-control col-md-3" value = "<?php echo $edita['autor']?>">
                </div>
                <div class="form-group">
                    <label for="lblEditora">Editora: </label>
                    <input type="text" id= "txtEditora" name="txtEditora" 
                    class="form-control col-md-3" value = "<?php echo $edita['editora']?>">
                </div>
                <input type="submit" id="bt_Gravar" name="bt_Gravar" class="btn btn-success bt-lg"  value="Atualizar">
                <input type="reset" id="bt_Limpar" name="bt_Limpar" class="btn btn-primary bt-lg" value="Limpar">
                <input type="button" id="bt_Cancelar" name="bt_Cancelar" class="btn btn-danger bt-lg" value="Voltar"
                 onclick="javascript:location.href='lstLivro.php'">             
         </form>
      </div>
    </body>
</html>