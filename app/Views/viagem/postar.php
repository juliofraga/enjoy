<main class="bg-white">
	<form method="POST" id="formNovoPost" action="<?= URL ?>/Viagem/cadastrar" enctype="multipart/form-data">
		<div id="form0">
			<h4>Qual o seu nome? Não tem problema se não quiser se identificar :)</h4>
			<span>
				<input type="text" size="50px" class="form form-control" name="txtNome">
			</span>
			<br>
			<input type="button" class="btn btn-primary" style="width:30%;" onClick="alteraCampos(0);" value="Next">
		</div>
		<div id="form1">
			<h4>Conte-nos, para onde foi a sua viagem?</h4>
			<span>
				<input type="text" size="50px" class="form form-control" name="txtLocalViagem" id="txtLocalViagem">
			</span>
			<h4>Quando você viajou?</h4>
			<span>
				<input type="date" size="50px" class="form form-control" name="dtQuando">
			</span>
			<div class='alert alert-danger' id="alertaLocalViagem" role='alert'>Por favor, nos conte para onde você viajou! :)</div>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:30%;" onClick="alteraCampos(5);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:30%;" onClick="alteraCampos(1);" value="Next">
			</div>
		</div>
		<div id="form2">
			<h4>Do que você mais gostou?</h4>
			<span>
				<textarea class="form form-control" rows="3" cols="80" name="txtMaisGostou" id="txtMaisGostou"></textarea>
			</span>
			<h4>E o que você acha que deixou a desejar?</h4>
			<span>
				<textarea class="form form-control" rows="3" cols="80" name="txtMenosGostou" id="txtMenosGostou"></textarea>
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:30%;" onClick="alteraCampos(6)" value="Previous">
				<input type="button" class="btn btn-primary" style="width:30%;" onClick="alteraCampos(2);" value="Next">
			</div>
		</div>
		<div id="form3">
			<h4>Nos conte mais sobre a sua viagem, dicas, observações, fique a vontade :)</h4>
			<span>
				<textarea class="form form-control" rows="10" cols="100" name="txtComentarios" id="txtComentarios"></textarea>
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:30%;" onClick="alteraCampos(7);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:30%;" onClick="alteraCampos(3);" value="Next">
			</div>
		</div>
		<div id="form4">
			<h4>Envie até 3 fotos da sua viagem, elas irão para o post no nosso blog, capriche na escolha!</h4>
			<span>
				<input type="file" class="form-control-file" name="img1" accept="image/*"><br><br>
				<input type="file" class="form-control-file" name="img2" accept="image/*"><br><br>
				<input type="file" class="form-control-file" name="img3" accept="image/*">
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:30%;" onClick="alteraCampos(8);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:30%;" onClick="alteraCampos(4);" value="Next">
			</div>
		</div>
		<div id="form5">
			<h4>Qual o seu Instagram?</h4>
			<span>
				<input type="text" size="50px" class="form form-control" name="txtInstagram">
			</span>
			<br>
			<h4>Você nos autoriza a compartilhamos a sua postagem nas nossas redes sociais?</h4>
			<span>
				<select class="form form-control" name="selAutoriza">
					<option>Sim</option>
					<option>Não</option>
				</select>
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:30%;" onClick="alteraCampos(9);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:30%;" onClick="submeterNovoPost();" value="Finalizar" name="finalizar">
			</div>
		</div>
		<div id="camposNaoInformados">
			<div class='alert alert-danger alertaCamposNaoInformados'  role='alert'>
				Para que possamos finalizar seu post, preencha pelo menos um dos campos abaixo ;)
				<div class='alinhaEsquerda'>
					<li>Do que você mais gostou?</li>
					<li>E o que você acha que deixou a desejar?</li>
					<li>Nos conte mais sobre a sua viagem, dicas ou observações</li>
				</div>
			</div>
			<input type="button" class="btn btn-secondary" style="width:30%;" onClick="alteraCampos(10);" value="Back">
		</div>
	</form>
</main>