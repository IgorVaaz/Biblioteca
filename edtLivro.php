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
    $titulo = trim($_POST['txtTitulo']); 
    $autor = trim($_POST['txtAutor']);
    $editora = trim($_POST['txtEditora']); 
    

    if (!empty($titulo) && !empty($autor) && !empty($editora)){
        $sql = "UPDATE livro SET titulo='$titulo', autor='$autor', editora='$editora' WHERE id='$id';";
        $ins = mysql_query($sql); 
        if (!$ins){
            echo "Erro ao atualizar Livro...";
          
        }
    }
    else {
		echo "campos em branco...";
	
    }
    
    header('location: lstLivro.php');
?>