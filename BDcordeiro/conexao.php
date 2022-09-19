<?php
   $servidor = "localhost";
   $usuario  = "root";
   $senha =  "";
   $bd = "tesao";
   $con = new mysqli($servidor,$usuario,$senha,$bd);
   if($con){
       echo"Conexao oxes";
   }else{
       echo"Conexao urip";
   }
?>