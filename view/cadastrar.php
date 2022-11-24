<?php require './head.php'; ?>
<body>
    <?php require './header.php'; ?>
</nav>
    <div class="row">

        <div class="col s6 offset-s3">
            <div class="card">
                <form method="POST" action="../controller/cadastrarFilmes.php?action=cadastrar">
                    <div class="card-content center">
                        <span class="card-title">Cadastrar Filme</span>

                        <div class="formGroup">

                            <!--TITULO  -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="titulo" id="titulo" class="validate" required>
                                    <label for="titulo">Titulo do filme</label>
                                </div>
                            </div>

                            <!--SINOPSE  -->
                            <div class="row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="sinopse" class="materialize-textarea" name="sinopse" required></textarea>
                                            <label for="sinopse">Sinopse</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- IMAGEM -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="url" name="poster" id="poster" class="validate" required>
                                    <label for="poster">Poster do filme</label>
                                </div>
                            </div>

                            <!--NOTA  -->
                            <div class="row">
                                <div class="input-field col s3">
                                    <input type="number" name="nota" id="nota" class="validate" required step="0.1"
                                        min=".1" max="10">
                                    <label for="nota">Nota</label>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <div class="card-action">
                        <a href="galeria.php" class="btn grey">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn purple">Cadastrar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
<script>
    document.querySelector('#nav-mobile li:nth-child(2)').classList.add('active')
</script>
</html>