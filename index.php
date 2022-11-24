<?php 

$rota =  $_SERVER['REQUEST_URI'];

if($rota == '/' || $rota == 'view' || $rota =='/index.php'|| $rota =='/home' || $rota =='/index.html' || $rota =='/home.php' || $rota =='/home.html'){
    header('location: view/galeria.php');
} else if($rota == '/novo'){
    header('location: view/cadastrar.php');
}else{
    header('location: view/404.php');
}

?>