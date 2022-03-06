<main class="bg-white">
	<form method="POST" id="formNovoPost" action="<?= URL ?>/Viagem/cadastrar" enctype="multipart/form-data">
		<div id="form0">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
				<path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
			</svg>
			<h4 class="espacoSvg">Qual o seu nome?<br>Não tem problema se não quiser se identificar :)</h4>
			<span>
				<input type="text" size="50px" class="form form-control" name="txtNome">
			</span>
			<br>
			<input type="button" class="btn btn-primary" style="width:40%;" onClick="alteraCampos(0);" value="Next">
		</div>
		<div id="form1">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-heart" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M2.965 12.695a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2Zm-.8 3.108.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125ZM8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
			</svg>
			<h4 class="espacoSvg">Conte-nos, para onde foi a sua viagem?</h4>
			<span>
				<input type="text" size="50px" class="form form-control" name="txtLocalViagem" id="txtLocalViagem">
			</span>
			<h4>Quando você viajou?</h4>
			<span>
				<input type="date" size="50px" class="form form-control" name="dtQuando">
			</span>
			<div class='alert alert-danger' id="alertaLocalViagem" role='alert'>Por favor, nos conte para onde você viajou! :)</div>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:40%;" onClick="alteraCampos(5);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:40%;" onClick="alteraCampos(1);" value="Next">
			</div><br>
		</div>
		<div id="form2">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
				<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				<path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
			</svg>
			<h4 class="espacoSvg">Do que você mais gostou?</h4>
			<span>
				<textarea class="form form-control" rows="3" cols="80" name="txtMaisGostou" id="txtMaisGostou"></textarea>
			</span>
			<br>
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
				<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				<path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
			</svg>
			<h4 class="espacoSvg">E o que você acha que deixou a desejar?</h4>
			<span>
				<textarea class="form form-control" rows="3" cols="80" name="txtMenosGostou" id="txtMenosGostou"></textarea>
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:40%;" onClick="alteraCampos(6)" value="Previous">
				<input type="button" class="btn btn-primary" style="width:40%;" onClick="alteraCampos(2);" value="Next">
			</div>
		</div>
		<div id="form3">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
				<path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
			</svg>
			<h4 class="espacoSvg">Nos conte mais sobre a sua viagem, dicas, observações, fique a vontade :)</h4>
			<span>
				<textarea class="form form-control" rows="10" cols="100" name="txtComentarios" id="txtComentarios"></textarea>
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:40%;" onClick="alteraCampos(7);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:40%;" onClick="alteraCampos(3);" value="Next">
			</div>
		</div>
		<div id="form4">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
				<path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
			<path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
			</svg>&nbsp;&nbsp;&nbsp;
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
				<path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
				<path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
			</svg>
			<h4 class="espacoSvg">Envie até 3 fotos da sua viagem, elas irão para o post no nosso blog, capriche na escolha!</h4>
			<span>
				<input type="file" class="form-control-file" name="img1" accept="image/*"><br><br>
				<input type="file" class="form-control-file" name="img2" accept="image/*"><br><br>
				<input type="file" class="form-control-file" name="img3" accept="image/*">
			</span>
			<div id="botoesStyles">
				<input type="button" class="btn btn-danger" style="width:40%;" onClick="alteraCampos(8);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:40%;" onClick="alteraCampos(4);" value="Next">
			</div>
		</div>
		<div id="form5">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
				<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
			</svg>
			<h4 class="espacoSvg">Qual o seu Instagram?</h4>
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
				<input type="button" class="btn btn-danger" style="width:40%;" onClick="alteraCampos(9);" value="Previous">
				<input type="button" class="btn btn-primary" style="width:40%;" onClick="submeterNovoPost();" value="Finalizar" name="finalizar">
			</div>
		</div>
		<div id="camposNaoInformados">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-dizzy" viewBox="0 0 16 16">
				<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				<path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
			</svg>
			<div class='alert alert-danger alertaCamposNaoInformados espacoSvg' role='alert'>
				Para que possamos finalizar seu post, preencha pelo menos um dos campos abaixo ;)
				<div class='alinhaEsquerda'>
					<li>Do que você mais gostou?</li>
					<li>E o que você acha que deixou a desejar?</li>
					<li>Nos conte mais sobre a sua viagem, dicas ou observações</li>
				</div>
			</div>
			<input type="button" class="btn btn-secondary" style="width:40%;" onClick="alteraCampos(10);" value="Back"><br>
		</div>
	</form>
</main>