<?php
    include_once("../15112017/Model/cliente.php");
    header('Content-Type: text/html; charset=utf-8');
    class ClienteDao{
       
        function cadastrar($cliente, $link){
            $nome = $cliente->getNome();
            $nasc = $cliente->getNasc();
            $sal  = $cliente->getSal();
            $msg  = $cliente->getMsg();

            $sql = "INSERT INTO cliente VALUES ('$nome','$nasc',$sal,'$msg');";

            if(!mysqli_query($link, $sql)){
                die("<br>Erro na inserção !<br>");
            }
            echo "<br>Cliente '".$nome."' inserido com sucesso";
        }

        function excluir($cliente, $link){
            $nome = $cliente->getNome();

            $sql = "DELETE FROM cliente WHERE nome = '$nome';";

            if(!mysqli_query($link, $sql)){
                die("<br>Não foi possivel excluir o cliente ".$nome." !<br>");
            }
            echo "<br>Cliente '".$nome."' excluido com sucesso";
        }

        function consultar($cliente, $link){
            $nome = $cliente->getNome();

            if(!$nome){
                $sql = "SELECT * FROM cliente;";
            } else{
                $sql = "SELECT * FROM cliente WHERE nome = '$nome';"; 
            }
            $consulta = mysqli_query($link, $sql);
            if(!$consulta){ //
                die("<br>Não houve retorno na consulta<br>");
            }

            return $consulta;
        }
    }
?>