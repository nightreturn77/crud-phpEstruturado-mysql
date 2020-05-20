<?php
include('db/connection.php');

if (isset($_POST['cadastrar'])) {

    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $pass = $_POST['pass'];


    $query = "insert into cliente(email,nascimento,nome,sexo,senha) values('$email','$nascimento','$nome','$sexo','$senha')";


    if (mysqli_query($conn, $query)) {

        echo "<script>
   alert('Cadastrado com sucesso');
   window.location.href ='../' 
   
   </script>";
    } else {
        echo "Falha ao cadastrar";
    }
} else {

    echo "<script>
    alert('ERRO: Operação indevida');
    window.location.href ='../' 
    
    </script>";
}
