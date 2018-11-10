<?php
     session_start();
     if (!isset($_SESSION['user'])) 
        Header("Location: ./login.php");

      // echo "php está funfando"; 
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
    $rs = mysql_query("SELECT * FROM  aluno;");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Alunos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
    <body class="container col-md-10">
        <h1 class="prymary">Listar Alunos</h1>
        <br/> 
        <input type="button" id="bt_Ad" name="bt_Ad" class="btn btn-primary" value="Adicionar"
              onclick="javascript:location.href='frmInsAluno.html'">
        <input type="button" id="bt_logOut" name="bt_logOut" class="btn btn-danger" value="Sair"
              onclick="javascript:location.href='logout.php'">
        <br/>
        <table class="table table-hover table-dark col-md-10">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>E-mail</th>
                <th>telefone</th>
                <th colspan="2" class="text-center">OPERAÇÕES</th>
                
            </tr>
            <?php while ($linha = mysql_fetch_array($rs)) {?>
                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['nome'] ?></td>
                    <td><?php echo $linha['curso'] ?></td>
                    <td><?php echo $linha['email'] ?></td>
                    <td><?php echo $linha['tel'] ?></td>
                    <td>
                      <button  class="btn btn-outline-warning bt-sm"
                       onclick="javascript: location.href='frmEdtAluno.php?id=' +
                      <?php echo $linha['id'] ?>"><i class="far fa-edit"></i></button>
                    </td>
                    <td>
                      <button  class="btn btn-outline-danger bt-sm"
                       onclick="javascript: location.href='frmRemAluno.php?id=' +
                      <?php echo $linha['id'] ?>"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            <?php }?> 
        </table>
    </body>
</html>







