<?php 
//configDB.php

//Dados para escolha DataBase (DB)
$dbhost = "localhost";
$dbuser = "root";// Usuario Raiz
$dbpass = "";
$dbname = "sistemaDeLogin";

// Conexão com o banco de dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){
    die("Não foi possivel conectar ao Banco De Dados: . $conecta->_connect_error");
}else{
    //echo "<h1>Conectou no BD Manowwwww!</h1>";
}