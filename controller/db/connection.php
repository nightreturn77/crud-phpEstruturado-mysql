<?php

//O banco de dados é criado automaticamente se você estiver utilizando mysql

$conn = mysqli_connect('localhost', 'adm', 'password');
$db = false;

if (!$conn) {

    $_SERVER['db_msg'] = "Failed to connect in database. Please fix it before try again";
} else {
    $dbName = "crudphpestruturado";
    $query = "create database $dbName ";


    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Banco de dados criado com sucesso'); </script>";
        $db = true;
        $conn = mysqli_connect('localhost', 'adm', 'password', $dbName);
    } else {

        $conn = mysqli_connect('localhost', 'adm', 'password', $dbName);
    }



    $query = "
create table cliente( 
    id int(4) auto_increment primary key, 
    nome varchar(50) not null, 
    email varchar(50) not null, 
    senha varchar(50) not null, 
    sexo varchar(50) not null, 
    nascimento varchar(50) not null




    )



";

    if ($db == true) {
        if (mysqli_query($conn, $query)) {
            echo "<script> alert('tabela cliente criada com sucesso'); </script>";
        } else {
            echo "<script> alert('Failed'); </script>";
        }
    }
}
