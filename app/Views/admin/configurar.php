<main id="formLogin">
    <div id="configurar">
		<h5>APLICAR IMAGENS NA PÁGINA INICIAL</h5>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
					<div class="col">
						<div class="card shadow-sm">
							<?php 
								if(!isset($dados["img1"][0]->img1)){
							?>
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">No image :(</text></svg>
							<?php 
								}else{
							?>
								<img width="100%" height="225" src="<?= URL ?>/public/img/home/<?=$dados["img1"][0]->img1?>">
							<?php
								}
							?>
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group buttonMargin">
										<form method="POST" action="<?= URL ?>/Admin/alterarImagem/1" enctype="multipart/form-data">
											<input type="file" class="form-control-file" name="img" accept="image/*">
											<input type="submit" class="btn btn-sm btn-outline-secondary" value="Alterar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<?php 
								if(!isset($dados["img2"][0]->img2)){
							?>
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">No image :(</text></svg>
							<?php 
								}else{
							?>
								<img width="100%" height="225" src="<?= URL ?>/public/img/home/<?=$dados["img2"][0]->img2?>">
							<?php
								}
							?>
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group buttonMargin">
										<form method="POST" action="<?= URL ?>/Admin/alterarImagem/2" enctype="multipart/form-data">
											<input type="file" class="form-control-file" name="img" accept="image/*">
											<input type="submit" class="btn btn-sm btn-outline-secondary" value="Alterar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<?php 
								if(!isset($dados["img3"][0]->img3)){
							?>
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">No image :(</text></svg>
							<?php 
								}else{
							?>
								<img width="100%" height="225" src="<?= URL ?>/public/img/home/<?=$dados["img3"][0]->img3?>">
							<?php
								}
							?>
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group buttonMargin">
										<form method="POST" action="<?= URL ?>/Admin/alterarImagem/3" enctype="multipart/form-data">
											<input type="file" class="form-control-file" name="img" accept="image/*">
											<input type="submit" class="btn btn-sm btn-outline-secondary" value="Alterar">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 mt-2">
				<a type="submit" class="btn btn-primary" style="width:100%;" href="<?= URL ?>/Index/homePreview" >Pré-visualizar</a>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 mt-2">
				<a type="submit" class="btn btn-success" style="width:100%;" href="<?= URL ?>/Admin/aplicarAlteracoesImg" >Aplicar Alterações</a>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 mt-2">
				<a type="submit" class="btn btn-danger" style="width:100%;" href="<?= URL ?>/Admin/descartarAlteracoesImg" >Descartar Alterações</a>
			</div>
		</div>
		<hr>
		<h5 class="espacoEntreSessoes">POSTS NA PÁGINA INICIAL</h5>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
					<div class="col">
						<div class="card shadow-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="row fullWidth litteMarginLeft">
										<form method="POST" action="<?= URL ?>/Admin/alterarPost/1">
											<div class="col-md-12">
												<select class="form-control fullWidth" name="selectPost">
													<option value="">Selecione...</option>
													<?php 
														foreach($dados["posts"] as $posts){
															if($posts->codpos == $dados["post1"][0]->post1){
													?>
																<option value="<?= $posts->codpos ?>" selected><?= $posts->slug ?></option>
													<?php
															}else{
													?>
																<option value="<?= $posts->codpos ?>"><?= $posts->slug ?></option>
													<?php
															}
													?>
													<?php
														}
													?>
												</select>
											</div><br>
											<div class="col-md-12">
												<input type="submit" class="btn btn-sm btn-outline-secondary fullWidth" value="Alterar">
											</div>
										</form>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="row fullWidth litteMarginLeft">
										<form method="POST" action="<?= URL ?>/Admin/alterarPost/2">
											<div class="col-md-12">
												<select class="form-control fullWidth" name="selectPost">
													<option value="">Selecione...</option>
													<?php 
														foreach($dados["posts"] as $posts){
															if($posts->codpos == $dados["post2"][0]->post2){
													?>
																<option value="<?= $posts->codpos ?>" selected><?= $posts->slug ?></option>
													<?php
															}else{
													?>
																<option value="<?= $posts->codpos ?>"><?= $posts->slug ?></option>
													<?php
															}
													?>
													<?php
														}
													?>
												</select>
											</div><br>
											<div class="col-md-12">
												<input type="submit" class="btn btn-sm btn-outline-secondary fullWidth" value="Alterar">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
								<div class="row fullWidth litteMarginLeft">
										<form method="POST" action="<?= URL ?>/Admin/alterarPost/3">
											<div class="col-md-12">
												<select class="form-control fullWidth" name="selectPost">
													<option value="">Selecione...</option>
													<?php 
														foreach($dados["posts"] as $posts){
															if($posts->codpos == $dados["post3"][0]->post3){
													?>
																<option value="<?= $posts->codpos ?>" selected><?= $posts->slug ?></option>
													<?php
															}else{
													?>
																<option value="<?= $posts->codpos ?>"><?= $posts->slug ?></option>
													<?php
															}
													?>
													<?php
														}
													?>
												</select>
											</div><br>
											<div class="col-md-12">
												<input type="submit" class="btn btn-sm btn-outline-secondary fullWidth" value="Alterar">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 mt-2">
				<a type="submit" class="btn btn-primary" style="width:100%;" href="<?= URL ?>/Index/homePreview" >Pré-visualizar</a>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 mt-2">
				<a type="submit" class="btn btn-success" style="width:100%;" href="<?= URL ?>/Admin/aplicarAlteracoesPosts" >Aplicar Alterações</a>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 mt-2">
				<a type="submit" class="btn btn-danger" style="width:100%;" href="<?= URL ?>/Admin/descartarAlteracoesPosts" >Descartar Alterações</a>
			</div>
		</div>
		<hr>
		<h5 class="espacoEntreSessoes">TEXTOS DO SITE</h5>
		<div class="form-group row">
			<h6>Privacidade</h6>
			<div class="col-md-12 mt-2">
				<form method="POST" action="<?= URL ?>/Admin/atualizaTexto/privacidade">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" required name="texto"><?= $dados["textoPrivacidade"][0]->texto ?></textarea>
					<div class="col-md-2 mt-4">
						<select class="form-control" required name="status">
							<?php
								$selectedAtivado = $dados["textoPrivacidade"][0]->status == 'a' ? 'selected' : '';
								$selectedDesativado = $dados["textoPrivacidade"][0]->status == 'd' ? 'selected' : '';
							?>
							<option value="a" <?= $selectedAtivado ?>>Ativado</option>
							<option value="d" <?= $selectedDesativado ?>>Desativado</option>
						</select>
					</div>
					<div class="col-md-12 mt-4">
						<input type="submit" class="btn btn-primary" style="width:100%;" value="Atualizar" name="atualizar">
					</div>
				</form>
			</div>
		</div>
		<hr>
		<h5 class="espacoEntreSessoes">POSTS MAIS VISUALIZADOS</h5>
		<?php foreach($dados["maisVisitados"] as $posts){ ?>
			<div class="form-group row mt-3">
				<div class="col-md-2">
					<label><?= $posts->local ?> - <?= $posts->numvis ?></label>
				</div>
				<div class="col-md-2">
					<a class="btn btn-success btn-sm" href="<?= URL ?>/viagem/preview/<?= $posts->slug ?>">Ver Post</a>
				</div>
			</div>
			<hr>
		<?php }?>
    </div>
</main>