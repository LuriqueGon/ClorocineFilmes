<?php
    session_start();
    require '../repository/conexao.php';
    require '../model/filmeModel.php';
    require '../repository/filmesServices.php';

    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    if($action == 'favoritar'){
        $conexao = new Conexao();
        $filmesServices = new FilmesServices(null, $conexao);
        $id = $_GET['id'];
        $result = ['success' => $filmesServices->favoritar($id)];
        header('content-type: application/json');
        echo json_encode($result);
        


    }else if($action == 'desfavoritar'){
        $conexao = new Conexao();
        $filmesServices = new FilmesServices(null, $conexao);
        $id = $_GET['id'];
        $result = ['success' => $filmesServices->favoritar($id, false)];
        header('content-type: application/json');
        echo json_encode($result);

        echo $id;
    }

?>