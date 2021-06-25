<main id="formLogin">
    <div id="formLogin2">
		<?php 
			if($dados["resultado"] == "erro"){
				echo "  <div class='alert alert-danger' role='alert'>";
				echo $dados["mensagem"];
				echo "</div>";
			}
		?>
        <form method="POST" action="<?= URL ?>/admin/login">
            <div class="row">
                <label><b>Usuário</b></label>
                <input type="email" name="txtUsuario" id="txtUser" class="form-control" required>
            </div>
            <div class="row mt-5">
                <label><b>Senha</b></label>
                <input type="password" name="txtPass" id="txtPass" class="form-control" required>
            </div>
            <div class="row mt-5">
                <input type="submit" name="btLogin" id="btLogin" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>
</main>