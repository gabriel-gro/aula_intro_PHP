<?php
    include_once("../15112017/conexao.php");
    include_once("../15112017/cliente.php");
    include_once("../15112017/clienteDao.php");
    

    header('Content-Type: text/html; charset=utf-8');

    $nome = $_GET["nome"];
    $nasc = $_GET["nasc"];
    $sal  = $_GET["sal"];
    $msg  = $_GET["msg"];

    $conexao = new Conexao('localhost', 'root', '', '15112017');

    
    $cli = new Cliente($nome, $nasc, $sal, $msg);
    //echo (cli->getDados());

    $clienteDao = new ClienteDao();

    $clienteDao->cadastrar($cli, $conexao->getLink());

    $conexao->close();
?>