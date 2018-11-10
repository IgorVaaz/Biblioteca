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

    if (!empty($id)){
        $sql = "DELETE FROM livro WHERE id='$id';";
        $ins = mysql_query($sql); 
        if (!$ins){
            echo "Erro ao remover Livro...";
          
        }
    }
    else {
		echo "campos em branco...";
	
    }
    
    header('location: lstLivro.php');
?>