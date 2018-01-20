<?php
    class Cliente{
        var $nome;
        var $nasc;
        var $sal;
        var $msg;

        function Cliente($nome , $nasc, $sal, $msg){
            $this->nome = $nome;
            $this->nasc = $nasc;
            $this->sal  = $sal;
            $this->msg  = $msg;
        }
        
        function getNome(){
            return $this->nome; 
        }
        function getNasc(){
            return $this->nasc; 
        }
        function getSal(){
            return $this->sal; 
        }
        function getMsg(){
            return $this->msg; 
        }

        function getDados(){
            $msg = $this->nome."<br>".$this->nasc."<br>".$this->sal."<br>".$this->msg."<br>";
            return $msg;
        }
    }
?>