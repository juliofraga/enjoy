<main class="bg-white">
	<form method="POST" action="<?= URL ?>/Viagem/cadastrar" enctype="multipart/form-data">
		<div id="form0">
			<h4>Qual o seu nome? Não tem problema se não quiser se identificar :)</h4>
			<span>
				<input type="text" size="50px" class="form form-control" name="txtNome">
			</span>
			<br>
			<input type="button" class="btn btn-dark" style="width:30%;" onClick="alteraCampos(0);" value="Next">
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
			<br>
			<input type="button" class="btn btn-dark" style="width:30%;" onClick="alteraCampos(1);" value="Next">
		</div>
		<div id="form2">
			<h4>Do que você mais gostou?</h4>
			<span>
				<textarea class="form form-control" rows="3" cols="80" name="txtMaisGostou"></textarea>
			</span>
			<h4>E o que você acha que deixou a desejar?</h4>
			<span>
				<textarea class="form form-control" rows="3" cols="80" name="txtMenosGostou"></textarea>
			</span>
			<br>
			<input type="button" class="btn btn-dark" style="width:30%;" onClick="alteraCampos(2);" value="Next">
		</div>
		<div id="form3">
			<h4>Nos conte mais sobre a sua viagem, dicas, observações, fique a vontade :)</h4>
			<span>
				<textarea class="form form-control" rows="10" cols="100" name="txtComentarios"></textarea>
			</span>
			<br>
			<input type="button" class="btn btn-dark" style="width:30%;" onClick="alteraCampos(3);" value="Next">
		</div>
		<div id="form4">
			<h4>Envie até 3 fotos da sua viagem, elas irão para o post no nosso blog, capriche na escolha!</h4>
			<span>
				<input type="file" class="form-control-file" name="img1" accept="image/*"><br><br>
				<input type="file" class="form-control-file" name="img2" accept="image/*"><br><br>
				<input type="file" class="form-control-file" name="img3" accept="image/*">
			</span>
			<br>
			<input type="button" class="btn btn-dark" style="width:30%;" onClick="alteraCampos(4);" value="Next">
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
			<br>
			<input type="submit" class="btn btn-dark" style="width:30%;" value="Finalizar" name="finalizar">
		</div>
	</form>
</main>