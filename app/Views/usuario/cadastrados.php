<main style="background-color:white; height: 0 auto;min-height:500px; width:100%;">
    <nav aria-label="breadcrumb" style="padding-top:2%">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Usuários</a></li>
            <li class="breadcrumb-item"><a href="<?= URL ?>/usuario/cadastro">Cadastrar Usuário</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuários Cadastrados</li>
        </ol>
    </nav>
    <div id="usuariosCadastrados">
      <main class="container">
        <?php foreach($dados["informacoes"] as $infos){?>
            <div class="form-group row">
                <div class="col-md-9 mt-1">
                <?= $infos->nomusu; ?>
                </div>
                <div class="col-md-3 mt-0">
                    <a class="btn btn-dark btn-sm" href="#" style="width:100%">Alterar Usuário</a>
                </div>
            </div>
            <hr>
        <?php } ?>
      </main>
    </div>

</main>