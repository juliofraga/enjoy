<?php 

    class Viagem extends Controller{

        public function __construct()
        {
			$this->viagemModel = $this->model('ViagemModel');
			$this->helpers = new Helpers();
        }
        //exibir tela para postagem do usuário
        public function postar(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('viagem/postar', $dados);
        }
		//exibir viagens cadastradas no sistema
        public function posts(){
			$dados = [
                "dados"  => $this->viagemModel->buscaPosts()
            ];
            $this->view('viagem/posts', $dados);
        }
		//exibir um post específico
        public function post($slug = null){
            if(empty($slug) or $slug == null){
				$this->view('pagenotfound');
			}else{
				$dados = [
					"dados"  => $this->viagemModel->buscaPorSlug($slug, "exibir")
				];
				$imagens = $this->realocaImagens($dados);
				array_push($dados, $imagens);
				$this->view('viagem/post', $dados);
			}
        }

		//inserir no banco de dados as informações da viagem
		public function cadastrar(){
			$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$dados = [
				"nome" => trim($form["txtNome"]),
				"localViagem" 		=> trim($form["txtLocalViagem"]), 
				"slug"				=> $this->helpers->criaSlug($form["txtLocalViagem"], $form["dtQuando"]),
				"data" 				=> trim($form["dtQuando"]),
				"maisGostou" 		=> trim($form["txtMaisGostou"]),
				"menosGostou" 		=> trim($form["txtMenosGostou"]),
				"comentarios" 		=> trim($form["txtComentarios"]),
				"instagram" 		=> trim($form["txtInstagram"]),
				"autorizacao" 		=> trim($form["selAutoriza"]),
				"img1" 				=> $this->trataImagem($_FILES["img1"]["name"], $_FILES['img1']['tmp_name'], "img1"),
				"img2" 				=> $this->trataImagem($_FILES["img2"]["name"], $_FILES['img2']['tmp_name'], "img2"),
				"img3" 				=> $this->trataImagem($_FILES["img3"]["name"], $_FILES['img3']['tmp_name'], "img3"),
				"dataHora"			=> $this->helpers->returnDateTime()
			];
			if(empty($dados["localViagem"])){
				$dados = [
					"resultado" => "erro",
					"mensagem"  => "O local da viagem deve ser informado!"
				];
				$this->view('viagem/finalizar', $dados);
			}else if(empty($dados["maisGostou"]) and empty($dados["menosGostou"]) and empty($dados["comentarios"])){
				$dados = [
					"resultado" => "erro",
					"mensagem"  => "Não conseguimos registrar seu post, pois temos poucas informações, nos dê mais informações sobre a sua viagem, nos fale sobre algo que você gostou ou que não gostou, por exemplo!!"
				];
				$this->view('viagem/finalizar', $dados);
			}else{
				if($this->viagemModel->cadastrar($dados)){
					$dados = [
						"resultado" => "sucesso",
						"mensagem"  => "Obrigado por nos contar a sua experiência, em breve vamos liberar o seu post no nosso blog!!"
					];
					$this->view('viagem/finalizar', $dados);
				}else{
					$dados = [
						"resultado" => "erro",
						"mensagem"  => "Erro ao salvar dados no banco de dados, envie uma mensagem para o administador do sistema!"
					];
					$this->view('viagem/finalizar', $dados);
				}
			}
		}
		
		// Listar viagens pendentes de aprovação
		public function aprovacao(){
			if($this->helpers->sessionValidate()){
				$dados = [
					"dados"  => $this->viagemModel->buscaPendentesAprovacao()
				];
				$this->view('viagem/aprovacao', $dados);
			}else
				$this->view('pagenotfound');
        }
		
		//Aprovar postagem
		public function aprovar($codigo = null){
			if($this->helpers->sessionValidate()){
				$this->viagemModel->alteraStatusPost($codigo, "A");
				echo "<script>window.location.href='".URL."/viagem/aprovacao';</script>";
			}else
				$this->view('pagenotfound');
		}
		
		//Recusar postagem
		public function recusar($codigo = null){
			if($this->helpers->sessionValidate()){
				$this->viagemModel->alteraStatusPost($codigo, "R");
				echo "<script>window.location.href='".URL."/viagem/aprovacao';</script>";
			}else
				$this->view('pagenotfound');
		}
		
		//Excluir postagem
		public function excluir($codigo = null){
			if($this->helpers->sessionValidate()){
				$this->viagemModel->excluiPost($codigo);
				echo "<script>window.location.href='".URL."/viagem/posts';</script>";
			}else
				$this->view('pagenotfound');
		}
		
		//Pré-visualizar um post
		public function preview($slug = null){
			if($this->helpers->sessionValidate()){
				if(empty($slug) or $slug == null){
					$this->view('pagenotfound');
				}else{
					$dados = [
						"dados"  => $this->viagemModel->buscaPorSlug($slug, "preview")
					];
					$imagens = $this->realocaImagens($dados);
					array_push($dados, $imagens);
					$this->view('viagem/post', $dados);
				}
			}else
				$this->view('pagenotfound');
		}
		
		//tratar imagem recebida do formulário
		private function trataImagem($nome = null, $nomeTemp = null, $campo){
			if(empty($nome))
				return null;
			else{
				$dateTime = date('dmYhis');
				$path = $campo.$dateTime.$nome;
				$diretorio = "img/";
				move_uploaded_file($nomeTemp, $diretorio . $path);
				return $path;
			}
		}

		private function realocaImagens($array){
			$img1 = "";
			$img2 = "";
			$img3 = "";
			if($array["dados"][0]->camimg1 != null and $array["dados"][0]->camimg2 == null and $array["dados"][0]->camimg3 == null){
				$img1 = $array["dados"][0]->camimg1;
			}else if($array["dados"][0]->camimg1 == null and $array["dados"][0]->camimg2 != null and $array["dados"][0]->camimg3 == null){
				$img1 = $array["dados"][0]->camimg2;
			}else if($array["dados"][0]->camimg1 == null and $array["dados"][0]->camimg2 == null and $array["dados"][0]->camimg3 != null){
				$img1 = $array["dados"][0]->camimg3;
			}else if($array["dados"][0]->camimg1 != null and $array["dados"][0]->camimg2 != null and $array["dados"][0]->camimg3 == null){
				$img1 = $array["dados"][0]->camimg1;
				$img2 = $array["dados"][0]->camimg2;
			}else if($array["dados"][0]->camimg1 != null and $array["dados"][0]->camimg2 == null and $array["dados"][0]->camimg3 != null){
				$img1 = $array["dados"][0]->camimg1;
				$img2 = $array["dados"][0]->camimg3;
			}else if($array["dados"][0]->camimg1 == null and $array["dados"][0]->camimg2 != null and $array["dados"][0]->camimg3 != null){
				$img1 = $array["dados"][0]->camimg2;
				$img2 = $array["dados"][0]->camimg3;
			}else if($array["dados"][0]->camimg1 != null and $array["dados"][0]->camimg2 != null and $array["dados"][0]->camimg3 != null){
				$img1 = $array["dados"][0]->camimg1;
				$img2 = $array["dados"][0]->camimg2;
				$img3 = $array["dados"][0]->camimg3;
			}
			return [$img1, $img2, $img3];			
		}
		
    }

?>