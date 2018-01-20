<?php
    include_once("../15112017/Persistence/conexao.php");
    include_once("../15112017/Control/cliente.php");
    include_once("../15112017/persistence/clienteDao.php");
    header('Content-Type: text/html; charset=utf-8');

    $nome = $_POST["nome"];

    $conexao = new Conexao('localhost', 'root', '', '15112017');

    $cli = new Cliente($nome, '', 0, '');
    //echo (cli->getDados());

    $clienteDao = new ClienteDao();
    $dados = $clienteDao->Consultar($cli, $conexao->getLink());
    if(!$nome){
        $retLine = $dados->fetch_all(); // quebra a linhas
        foreach ($retLine as $linha){   // para cada linha, temos varias colunas
            echo "<br>".$linha[0];
            echo "<br>".$linha[1];
            echo "<br>".$linha[2];
            echo "<br>".$linha[3]."<br>";
        }
    } else {
        $retLine = $dados->fetch_array(); //pega uma linha da matriz de tetorno
        echo "<br>".$retLine["Nome"];
        echo "<br>".$retLine["Nasc"];
        echo "<br>".$retLine["Salario"];
        echo "<br>".$retLine["Msg"]."<br>";
    }

    $conexao->close();
?>