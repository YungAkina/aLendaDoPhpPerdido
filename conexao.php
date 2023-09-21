<?php

try{
    $banco = new PDO("sqlite:banco.sqLite");
    echo "Banco conectado!";

}catch(PDOException $e){
    echo "Deu erro na conexão!";
    echo $e->getMessage();


}