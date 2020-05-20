<?php
include('db/connection.php');

if (isset($_POST['logar'])) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login  == null || $senha == null) {
        echo "<script>
    alert('Ops... Algo errado');
    window.location.href ='../' 
    
    </script>";
    }




    $query = "select * from cliente where email = '.$login.' and senha = '.$senha.'";

    if (mysqli_query($conn, $query)) {
        echo "<script>
    alert('Login efetuado com sucesso');
    window.location.href ='../' 
    
    </script>";
    } else {
        echo "<script>
   alert('Falha ao logar');
   window.location.href ='../' 
   
   </script>";
    }
} else {

    echo "<script>
    alert('ERRO: Operação indevida');
    window.location.href ='../' 
    
    </script>";
}
