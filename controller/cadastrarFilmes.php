<?php 

    session_start();
    require '../repository/conexao.php';
    require '../model/filmeModel.php';
    require '../repository/filmesServices.php';

    $action = isset($_GET['action']) ? $_GET['action'] : $action;
    
    
    if($action == 'cadastrar'){        

        $conexao = new Conexao();
        $filme = new FilmeModel($_POST['titulo'],$_POST['poster'],$_POST['sinopse'],$_POST['nota']);
        $filmesServices = new FilmesServices($filme, $conexao);
        $filmesServices->insert();
        header('location: ../view/galeria.php');

    }

?>