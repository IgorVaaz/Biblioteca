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

      $id = trim($_REQUEST['id']); //codigo do aluno que vai editar
    $rs = mysql_query("SELECT * FROM  aluno where id=".$id);
    $edita = mysql_fetch_array($rs); 
   // echo $edita['descricao']; 
?>

<html>
    <head>
       <meta charset="UTF-8">
       <title>Editar Aluno</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>          
    <body>
      <div class="container col-md-8">
         <h1>Editar Aluno</h1>  
         <br>
         <form id="frmEdtAluno" name="frmEdtAluno" method="POST" action="edtAluno.php">
                <div class="form-group">
                    <label for="lbltxtId">ID:  <?php echo $edita['id'] ?> </label>
                    <input type="hidden" id="txtId" name="txtId" value="<?php echo $edita['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="lblNome">Nome: </label>
                    <input type="text" id= "txtNome" name="txtNome" 
                    class="form-control col-md-5" value = "<?php echo $edita['nome']?>">
                </div>
                <div class="form-group">
                    <label for="lblCurso">Curso: </label>
                    <input type="text" id= "txtCurso" name="txtCurso" 
                    class="form-control col-md-3" value = "<?php echo $edita['curso']?>">
                </div>
                <div class="form-group">
                    <label for="lblEmail">E-mail: </label>
                    <input type="text" id= "txtEmail" name="txtEmail" 
                    class="form-control col-md-3" value = "<?php echo $edita['email']?>">
                </div>  
                <div class="form-group">
                    <label for="lblTel">Telefone: </label>
                    <input type="text" id= "txtTel" name="txtTel" 
                    class="form-control col-md-3" value = "<?php echo $edita['tel']?>">
                </div>  
                <input type="submit" id="bt_Gravar" name="bt_Gravar" class="btn btn-success bt-lg"  value="Atualizar">
                <input type="reset" id="bt_Limpar" name="bt_Limpar" class="btn btn-primary bt-lg" value="Limpar">
                <input type="button" id="bt_Cancelar" name="bt_Cancelar" class="btn btn-danger bt-lg" value="Voltar"
                 onclick="javascript:location.href='lstAluno.php'">             
         </form>
      </div>
    </body>
</html>