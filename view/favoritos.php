<?php 
    session_start();

    require './head.php'; 
    require '../repository/conexao.php';
    require '../model/filmeModel.php';
    require '../repository/filmesServices.php';
    require "../util/mensagem.php";

    echo Mensagem::mostrar();
?>

<?php

    $conexao = new Conexao();
    $filmesServices = new FilmesServices(null ,$conexao);
    $action = 'assistidos'
    
?>
    
<style>
    .btn-fav{
        display: none;
    }
</style>
<body onload="sinopseLoader()">
    <?php require './header.php'; ?>

    <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a href="galeria.php">Todos</a></li>
                <li class="tab"><a href="assistidos.php" >Assistidos</a></li>
                <li class="tab"><a href="favoritos.php" class="active">Favoritos</a></li>
            </ul>
        </div>

    </nav>
    <div class="container">
        <div class="row">
    
            <?php require "../repository/cardLoader.php"; ?>
    
        </div>
    </div>



</body>
<script src="../util/sinopseLoader.js"></script>

<script>
    document.querySelector('#nav-mobile li:nth-child(1)').classList.add('active')    
</script>
</html>