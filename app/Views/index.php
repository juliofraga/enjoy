<main style="background-color:white;">
  <!-- CAROUSEL BEGIN-->

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <!-- CAROUSEL ITEM -->
      <div class="carousel-item active">
        <?php 
            if(!isset($dados["img1"][0]->img1)){
        ?>
            <img src="<?= URL ?>/public/img/home/padrao-preview.jpg">
        <?php 
            }else{
        ?>
            <img src="<?= URL ?>/public/img/home/<?=$dados["img1"][0]->img1?>">
        <?php
            }
        ?>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Conte-nos a sua experiência.</h1>
            <p>Queremos contar a sua experiência de viagem, ajude a tirar as dúvidas de quem quer ir para um destino que você conhece.</p>
            <p><a class="btn btn-lg btn-primary" href="<?= URL ?>/viagem/postar">Conte a sua viagem</a></p>
          </div>
        </div>
      </div>
      <!-- CAROUSEL ITEM -->
      <div class="carousel-item">
        <?php 
            if(!isset($dados["img2"][0]->img2)){
        ?>
            <img src="<?= URL ?>/public/img/home/padrao-preview.jpg">
        <?php 
            }else{
        ?>
            <img src="<?= URL ?>/public/img/home/<?=$dados["img2"][0]->img2?>">
        <?php
            }
        ?>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Londres</h1>
            <p>Um lugar lindo para se conhecer.</p>
            <p><a class="btn btn-lg btn-primary" href="VisualizarPost.html">Leia Mais</a></p>
          </div>
        </div>
      </div>
      <!-- CAROUSEL ITEM -->
      <div class="carousel-item">
        <?php 
            if(!isset($dados["img3"][0]->img3)){
        ?>
            <img src="<?= URL ?>/public/img/home/padrao-preview.jpg">
        <?php 
            }else{
        ?>
            <img src="<?= URL ?>/public/img/home/<?=$dados["img3"][0]->img3?>">
        <?php
            }
        ?>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Maragogi</h1>
            <p>Conheça o Caribe brasileiro.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Leia Mais</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- CAROUSEL BUTTONS -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- CAROUSEL - END -->


  <div id="mensagem">
    <p>Primeiramente, seja bem vindo(a), agradecemos a sua visita ao nosso Blog, é muito importante para nós, e se chegou até aqui, sem dúvidas é porque também se interessa por viagens, então convidamos você a desbravar esse mundo de possibilidades onde vivemos, e compartilhar conosco a sua história!</p>
  </div>
  <div class="container">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">
          <?php 
            if(isset($dados["post1"]) and count($dados["post1"]) > 0)
              echo $dados["post1"][0]->local;
            else
              echo "Local...";
          ?>
        </h2>
        <p class="lead">
          <?php 
            if(isset($dados["post1"]) and count($dados["post1"]) > 0){
              if(!empty($dados["post1"][0]->ovevia)){
                echo $dados["post1"][0]->ovevia;
              }else if(!empty($dados["post1"][0]->ponpos)){
                echo $dados["post1"][0]->ponpos;
              }else if(!empty($dados["post1"][0]->ponneg)){
                echo $dados["post1"][0]->ponneg;
              }
            }
            else
              echo "Informações sobre o lugar...";
          ?>
        </p>
      </div>
      <div class="col-md-5">
      <?php 
					$imagem = null;
					if($dados["post1"][0]->camimg1 != null)
						$imagem = $dados["post1"][0]->camimg1;
					else if($dados["post1"][0]->camimg2 != null)
						$imagem = $dados["post1"][0]->camimg2;
					else if($dados["post1"][0]->camimg3 != null)
						$imagem = $dados["post1"][0]->camimg3;

					if($imagem == null){
				?>
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">No images :(</text></svg>
        <?php
					}else{
				?>
					<img src="<?= URL ?>/public/img/<?=$imagem?>" width="100%" height="100%">
				<?php
					}
				?>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">
          <?php 
            if(isset($dados["post2"]) and count($dados["post2"]) > 0)
              echo $dados["post2"][0]->local;
            else
              echo "Local...";
          ?>
        </h2>
        <p class="lead">
          <?php 
            if(isset($dados["post2"]) and count($dados["post2"]) > 0){
              if(!empty($dados["post2"][0]->ovevia)){
                echo $dados["post2"][0]->ovevia;
              }else if(!empty($dados["post2"][0]->ponpos)){
                echo $dados["post2"][0]->ponpos;
              }else if(!empty($dados["post2"][0]->ponneg)){
                echo $dados["post2"][0]->ponneg;
              }
            }
            else
              echo "Informações sobre o lugar...";
          ?>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <?php 
					$imagem = null;
					if($dados["post2"][0]->camimg1 != null)
						$imagem = $dados["post2"][0]->camimg1;
					else if($dados["post2"][0]->camimg2 != null)
						$imagem = $dados["post2"][0]->camimg2;
					else if($dados["post2"][0]->camimg3 != null)
						$imagem = $dados["post2"][0]->camimg3;

					if($imagem == null){
				?>
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">No images :(</text></svg>
        <?php
					}else{
				?>
					<img src="<?= URL ?>/public/img/<?=$imagem?>" width="100%" height="100%">
				<?php
					}
				?>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <h2 class="featurette-heading">
          <?php 
            if(isset($dados["post3"]) and count($dados["post3"]) > 0)
              echo $dados["post3"][0]->local;
            else
              echo "Local...";
          ?>
        </h2>
        <p class="lead">
          <?php 
            if(isset($dados["post3"]) and count($dados["post3"]) > 0){
              if(!empty($dados["post3"][0]->ovevia)){
                echo $dados["post3"][0]->ovevia;
              }else if(!empty($dados["post3"][0]->ponpos)){
                echo $dados["post3"][0]->ponpos;
              }else if(!empty($dados["post3"][0]->ponneg)){
                echo $dados["post3"][0]->ponneg;
              }
            }
            else
              echo "Informações sobre o lugar...";
          ?>
        </p>
      </div>
      <div class="col-md-5">
        <?php 
					$imagem = null;
					if($dados["post3"][0]->camimg1 != null)
						$imagem = $dados["post3"][0]->camimg1;
					else if($dados["post3"][0]->camimg2 != null)
						$imagem = $dados["post3"][0]->camimg2;
					else if($dados["post3"][0]->camimg3 != null)
						$imagem = $dados["post3"][0]->camimg3;

					if($imagem == null){
				?>
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">No images :(</text></svg>
        <?php
					}else{
				?>
					<img src="<?= URL ?>/public/img/<?=$imagem?>" width="100%" height="100%">
				<?php
					}
				?>

      </div>
    </div>
    <hr class="featurette-divider">
  </div><!-- container -->
</main>