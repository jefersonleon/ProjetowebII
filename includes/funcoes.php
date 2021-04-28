<?php

function voltar(){
    return "<a href='index.php'> Voltar </a>";
}


function gerarHash($senha){
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
}


function testarHash($senha, $hash){

    $ok = password_verify($senha, $hash);
    return $ok;
}

/*
$senha = "Jeferson@123";
echo $senha." <br>";
$pass =  gerarHash($senha);
echo $pass."<br>";
if(testarHash($senha, $pass)){
    echo "Senha ok";
}else{
    echo "Senha não confere!";
}
*/