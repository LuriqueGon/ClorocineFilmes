<?php 

    if($action == 'assistidos'){
        $filmes = $filmesServices->read(true);
    }else{
        $filmes = $filmesServices->read();
    }

    foreach($filmes as $key => $value){;?>
        <div class="col s12 m6 l4 cardInfo">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?php echo $value['poster'] ;?>">
                    <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red" id="card_<?php echo $value['id'] ;?>">
                        <?php if($value['favoritos'] == 0){ ?>
                            <i class="material-icons">favorite_border</i>
                        <?php }else{?>
                            <i class="material-icons">favorite</i>
                        <?php }?>
                    </button>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i>
                        <span><?php echo $value['nota'] ;?></span>
                    </p>
                    <span class="card-title"><?php echo $value['titulo'] ;?></span>
                    <p class="sinopse"><?php echo $value['sinopse'] ;?></p>
                </div>
            </div>
        </div>

<?php } ?>