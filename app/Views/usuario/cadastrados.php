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
    <?php 
        if(count($dados) > 1){
            if($dados["resultado"] == "sucesso"){
                echo "  <div class='alert alert-success' role='alert'>";
                echo $dados["mensagem"];
                echo "</div>";
            }else if($dados["resultado"] == "erro"){
                echo "  <div class='alert alert-danger' role='alert'>";
                echo $dados["mensagem"];
                echo "</div>";
            }
        }
    ?>
      <main class="container">
        <?php foreach($dados["informacoes"] as $infos){?>
            <div class="form-group row">
                <div class="col-md-9 mt-1">
                <?= $infos->nomusu; ?>
                </div>
                <div class="col-md-3 mt-0">
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-<?= $infos->codusu ?>">Alterar Usuário</a>
                </div>
            </div>
            <hr style="width:90%;">
            <div class="modal fade" id="modal-<?= $infos->codusu ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><?= $infos->nomusu ?></h4>
                            <button type="button" class="close" data-dismiss="modal">x</button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= URL ?>/Usuario/alterar" id="formAlterar" name="formAlterar">
                                <div class="form-group row">
                                    <input type="hidden" name="txtCodigo" id="txtCodigo" value="<?= $infos->codusu ?>">
                                    <label class="titulos">Nome</label>
                                    <input type="text" id="txtNome" name="txtNome" required class="form-control" value="<?= 	$infos->nomusu ?>">
                                </div>
                                <div class="form-group row">
                                    <label class="titulos">E-mail</label>
                                    <input type="email" id="txtEmail" name="txtEmail" required class="form-control" value="<?= 	$infos->emausu ?>">
                                </div>
                                <div class="form-group row">
                                    <label class="titulos">Senha</label>
                                    <input type="password" id="txtSenha" name="txtSenha" class="form-control">
                                </div>	
                                <div class="form-group row">
                                    <label class="titulos">Confirmar Senha</label>
                                    <input type="password" id="txtConfirmaSenha" name="txtConfirmaSenha" class="form-control">
                                </div>	
                                <div class="form-group row">
                                    <div class="inline inline-block">
                                        <input type="submit" class="btn btn-primary" style="margin-top:40px;" name="update" id="update" value="Alterar Usuário">
                                        <input type="submit" class="btn btn-danger" style="margin-top:40px;" name="delete" id="delete" value="Deletar Usuário">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
      </main>
    </div>

</main>