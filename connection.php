<?php
$host = 'localhost';
$db   = 'crud';
$user = 'root';
$pass = '';
$sgbd='mysql';// pgsql, mysql
$tabela = 'pessoas';

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO("$sgbd:host=$host;dbname=$db", $user, $pass, $opt);
    /*** echo uma mensagem dizendo que nos conectamos ***/
//    echo 'Conectado para o banco de dados<br />';

    /*** fechando a conexão do banco de dados ***/
//    $pdo = null;
}catch(PDOException $e){
    echo $e->getMessage();
}

