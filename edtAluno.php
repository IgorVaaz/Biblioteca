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

    $id = trim($_POST['txtId']); 
    $nome = trim($_POST['txtNome']); 
    $curso = trim($_POST['txtCurso']);
    $email = trim($_POST['txtEmail']); 
    $tel = trim($_POST['txtTel']); 

    if (!empty($nome) && !empty($curso) && !empty($email) && !empty($tel)){
        $sql = "UPDATE aluno SET nome='$nome', curso='$curso', email='$email', tel='$tel' WHERE id='$id';";
        $ins = mysql_query($sql); 
        if (!$ins){
            echo "Erro ao atualizar Aluno...";
          
        }
    }
    else {
		echo "campos em branco...";
	
    }
    
    header('location: lstAluno.php');
?>