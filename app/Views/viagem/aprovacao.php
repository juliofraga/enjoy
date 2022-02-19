<main style="background-color:white; height:600px; width:100%;">
    <div id="aprovacoesPendentes">
      <main class="container">
        <?php
          if(count($dados["dados"]) > 0){
            foreach($dados["dados"] as $posts){
        ?>
		    <div class="form-group row">
          <label class="titulosLocal"><?= $posts->local ?></label>
          <div class="col-md-7 mt-0">
            <?= $posts->ovevia ?>
          </div>
          <div class="col-md-5 mt-0">
            <a class="btn btn-dark btn-sm" href="<?= URL ?>/viagem/preview/<?= $posts->slug ?>">Ver Post</a>
            <a class="btn btn-success btn-sm" href="<?= URL ?>/viagem/aprovar/<?= $posts->codpos ?>">Aprovar</a>
            <a class="btn btn-danger btn-sm" href="<?= URL ?>/viagem/recusar/<?= $posts->codpos ?>">Recusar</a>
          </div>
        </div>
		    <hr style="width: 80%">
			  <?php 
            }
          }else{
            echo "Não há postagens pendentes de aprovação!";
          }
        ?>
      </main>
    </div>
</main>