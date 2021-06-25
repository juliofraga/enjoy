<?php 
    $help = new Helpers();
?>
<main style="background-color:white; width:100%;">
  <div class="container marketing">
      <!-- TIÍTULO E SUBTÍTULO -->
      <h1 style="text-align:center; padding-top:70px;padding-bottom:80px;"><?= $dados["dados"][0]->local ?></h1>
      <h3 style="text-align:center; padding-top:10px;padding-bottom:80px;"><?= $dados["dados"][0]->datvia ?></h3>
      <!-- START THE FEATURETTES -->
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Comentários sobre a viagem <h2>
          <p class="lead"><?= $dados["dados"][0]->ovevia ?></p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
      </div>
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Pontos positivos.</h2>
          <p class="lead"><?= $dados["dados"][0]->ponpos ?></p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
      </div>
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Pontos Negativos. </h2>
          <p class="lead"><?= $dados["dados"][0]->ponneg ?></p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
      </div>
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->
		<?php if($help->sessionValidate()){ ?>
			<div class="row">
				<a class="btn btn-danger btn-sm" href="<?= URL ?>/viagem/excluir/<?= $dados["dados"][0]->codpos ?>">Excluir</a>
			</div>
			<div class="row mt-3" style="padding-bottom:5%;">
				<a class="btn btn-secondary btn-sm" href="<?= URL ?>/viagem/recusar/<?= $dados["dados"][0]->codpos ?>">Inativar</a>
			</div>
		<?php } ?>
    </div><!-- /.container -->
	
</main>
