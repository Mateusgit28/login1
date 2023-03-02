<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario== "mateus@gmail.com" && $senha ==2210){
    header("location: painel.php");
}else{
    header("location: usuarioinvalido.php");
}

