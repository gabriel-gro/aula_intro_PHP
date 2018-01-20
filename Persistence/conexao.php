<?php

    class Conexao{
        var $servidor;
        var $user;
        var $pass;
        var $bd;
        var $link;

        function Conexao($servidor, $user, $pass, $bd){
            $this->servidor = $servidor;
            $this->user = $user;
            $this->pass = $pass;
            $this->bd = $bd;

            $this->link = mysqli_connect($this->servidor, $this->user, $this->pass, $this->bd);

            if(!$this->link){
                die("<BR>CACA!<br>");
            }

            echo "<BR>CONECTADO<BR>";
        }

        function getLink(){
            return $this->link; 
        }

        function close(){
            mysqli_close($this->link);
        }
    }
?>