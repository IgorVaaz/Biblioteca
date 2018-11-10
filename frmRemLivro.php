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

    $id = trim($_REQUEST['id']); //codigo do produto que vai editar
    $rs = mysql_query("SELECT * FROM  livro where id='$id';");
    $linha = mysql_fetch_array($rs); 
   // echo $linha['descricao']; 
?>
<html>
  <head>
     <meta charset="UTF-8">
     <title>Remover Livro</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
      <div class="container col-md-8">
          <h1>Remover Livro</h1>
          <form id="frmRemLivro" name="frmRemLivro" method="POST" action="remLivro.php">
                <div class="form-group">
                    <label for="lblId">
                        <span class="text-xl font-weight-bold">ID: </span>
                        <span class="text-xl font-weight-normal"><?php echo $linha['id'] ?></span>
                    </label>
                    <input type="hidden" id="txtId" name="txtId" value="<?php echo $linha['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="lblTitulo">
                        <span class="text-xl font-weight-bold">Titulo: </span>
                        <span class="text-xl font-weight-normal"><?php echo $linha['titulo'] ?></span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="lblAutor">
                        <span class="text-xl font-weight-bold">Autor: </span>
                        <span class="text-xl font-weight-normal"><?php echo $linha['autor'] ?></span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="lblEditora">
                        <span class="text-xl font-weight-bold">Editora: </span>
                        <span class="text-xl font-weight-normal"><?php echo $linha['editora'] ?></span>
                    </label>
                </div>
                </div>
                <button name="btRem" id="btRem" class="btn btn-lg btn-success" type="submit"><i class="far fa-check-square"></i> Remover</button>               
                <button name="btBck" id="btBck" class="btn btn-lg btn-danger" type="button"
                    onclick="javascript:location.href='lstLivro.php'">
                    <i class="far fa-hand-point-left"></i> Voltar</button> 
          </form>
      </div>
  </body>
</html>