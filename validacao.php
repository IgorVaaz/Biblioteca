<?php
    $nome = $_POST['nome'];
    $twitter = $_POST['twitter'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $password = $_POST['password'];
    $masculino = $_POST['masculino'];
   // $feminino = $_POST['feminino'];

    echo "Nome: " . $nome . "<br/>";
    echo "Twitter: " . $twitter . "<br/>";
    echo "E-mail: " . $email . "<br/>";
    echo "Número: " . $numero . "<br/>";
    echo "Password: " . $password . "<br/>";
    if ($masculino==on)
        echo "Sexo: Masculino" . "<br/>";
    else echo "Sexo: Femenino" . "<br/>";


?>
