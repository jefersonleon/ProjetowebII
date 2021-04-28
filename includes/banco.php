<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $data = "bdgames";
   $port = "3307";

   $banco = new mysqli($servername, $username,$password,$data,$port);//objeto de conexão

   if($banco->connect_errno){
       echo "<p> Encontrei um erro $banco->errno --> $banco->connect_error </p>";
       die();
   }
   
   /*else{
     echo "Conectado com sucesso!!";
   }
*/
     $banco->query("SET NAMES 'utf8");
     $banco->query("SET character_set_connection=utf8");
     $banco->query("SET character_set_cliente=utf8");
     $banco->query("SET character_set_results=utf8");

/*
   $busca = $banco->query("select * from tbgeneros order by genero");
   var_dump($busca);
   if(!$busca){
       echo"<p> Falha na busca! $banco->error</p>";
   }else{
    echo" Lista de Generos<br>";
       while($reg = $busca->fetch_object())
       {
         echo" $reg->genero <br>";
       }

    }
*/