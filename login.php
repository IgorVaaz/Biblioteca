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

      $user = trim($_POST['user']);
      $pwd = trim($_POST['password']);
      $pwd = md5($pwd);
    $rs = mysql_query("SELECT * FROM  usuario where user like '$user'");
    $linha = mysql_fetch_array($rs); 
    //echo $linha['user'] . " - " . $linha['pwd'];

    if($pwd==$linha['pwd']){
        session_start();
        $_SESSION['user'] = $user;
        header('location: index.php ');

    }
    else {echo "Usuario e senha não conferem";
    header('location: login.html');
    }
?>