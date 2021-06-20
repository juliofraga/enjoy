<main style="background-color:white; height: 0 auto;min-height:500px; width:100%;">
    <nav aria-label="breadcrumb" style="padding-top:2%">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Usuários</a></li>
            <li class="breadcrumb-item"><a href="<?= URL ?>/usuario/cadastrados">Usuários Cadastrados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar Usuário</li>
    </ol>
    </nav>
    <div id="formPerfil">
        <?php 
            if(count($dados) > 1){
                if($dados["resultado"] == "sucesso"){
                    echo "  <div class='alert alert-success' role='alert'>";
                    echo $dados["mensagem"];
                    echo "</div>";
                    $dados["nome"] = "";
                    $dados["email"] = "";
                }else if($dados["resultado"] == "erro"){
                    echo "  <div class='alert alert-danger' role='alert'>";
                    echo $dados["mensagem"];
                    echo "</div>";
                }
            }else{
                $dados["nome"] = "";
                $dados["email"] = "";
            }
		?>
        <form method="POST" action="<?= URL ?>/Usuario/cadastrar">
            <div class="form-group row">
                <label class="titulos">Nome Completo</label>
                <input type="text" id="txtNome" name="txtNome" required class="form-control" value="<?= $dados["nome"] ?>">
            </div>
            <div class="form-group row" >
                <label class="titulos">E-mail</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail"  required placeholder="you@example.com" value="<?= $dados["email"] ?>">
            </div>
            <div class="form-group row" >
                <label class="titulos">Senha</label>
                <input type="password" class="form-control" id="txtSenha" name="txtSenha"  required placeholder="*********">
            </div>
            <div class="form-group row" >
                <label class="titulos">Repetir Senha</label>
                <input type="password" class="form-control" id="txtRepeteSenha" name="txtRepeteSenha" required  placeholder="*********" onblur="valida();">
            </div>
            <div class="form-group row">
                <div class="col-md-12 mt-0">
                   <input type="submit" class="btn btn-dark" style="margin-top:40px; width:100%" value="Cadastrar" name="cadastrar" id="cadastrar">
                </div>
            </div>
        </form>
    <div id="formPerfil">  
</main>