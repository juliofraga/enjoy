<div id="finalizarPost">
	<?php if($dados["resultado"] == "sucesso"){?>
			<div class='alert alert-success' role='alert'><?= $dados["mensagem"] ?></div>
	<?php }else{ ?>
			<div class='alert alert-danger' role='alert'><?= $dados["mensagem"] ?></div>
	<?php }?>
</div>