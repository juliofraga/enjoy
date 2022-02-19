<?php 
    $help = new Helpers();
?>
<main>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<?php foreach($dados["dados"] as $posts){ ?>
			<div class="col">
			  <div class="card-header">
				<?= $posts->local ?>
			  </div>
			  <div class="card shadow-sm">
				<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
				<div class="card-body">
				  <p class="card-text">
					<?php 
						if(!empty($posts->ovevia))
							echo $posts->ovevia;
						else if(!empty($posts->ponpos))
							echo $posts->ponpos;
						else if(!empty($posts->ponneg))
							echo $posts->ponneg;
					?>
				  </p>
				  <div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
					  <a type="button" class="btn btn-sm btn-outline-secondary" href="<?= URL?>/Viagem/post/<?= $posts->slug ?>">Visualizar</a>
					</div>
					<small class="text-muted"><?= $help->formataData($posts->datpos) ?></small>
				  </div>
				</div>
			  </div>
			</div>
		<?php } ?>
      </div>
    </div>
  </div>
</main>
