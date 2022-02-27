<?php 

    class Admin extends Controller{

        public function __construct()
        {
			$this->usuarioModel = $this->model('UsuarioModel');
			$this->viagemModel = $this->model('ViagemModel');
			$this->configurarModel = $this->model('ConfigurarModel');
			$this->helpers = new Helpers();
			$_SESSION["textoRodape"] = $this->configurarModel->buscaTexto("rodape");
        }
        
		//Exibir página para fazer login
        public function index(){
			if($this->helpers->sessionValidate()){
				echo "<script>window.location.href='".URL."';</script>";
			}else{
				$dados = [
					"dados"  	=> "",
					"status" 	=> "",
					"resultado" => "",
				];
				$this->view('admin/index', $dados);
			}
        }
		
		//validar login
		public function login(){
			$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form["btLogin"])){
				if(empty($form["txtUsuario"]) or empty($form["txtPass"])){
					$dados = [
						"resultado" => "erro",
                        "mensagem"  => "Login ou senha em branco, informe todos os campos!"
					];
					$this->view('admin/index', $dados);
				}else{
					$senha = $this->usuarioModel->fazLogin($form["txtUsuario"]);
					$senha = $senha[0]->pasusu;
					$senhaForm = $form["txtPass"];
					if($senha == null){
						$dados = [
							"resultado" => "erro",
							"mensagem"  => "Credenciais Inválidas!"
						];
						$this->view('admin/index', $dados);
					}else if(!password_verify($senhaForm, $senha)){
						$dados = [
							"resultado" => "erro",
							"mensagem"  => "Credenciais Inválidas!"
						];
						$this->view('admin/index', $dados);
					}else if(password_verify($senhaForm, $senha)){
						$this->helpers->setSession($form["txtUsuario"]);
						echo "<script>window.location.href='".URL."';</script>";
					}
				}
			}else{
				$this->view('errornotfound');
			}
		}
		
		public function alterarImagem($num = 0){
			if($this->helpers->sessionValidate() and $num >= 1 and $num <= 3 and $num != null and !empty($num)){
				$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$info = [
					"img" => $this->trataImagem($_FILES["img"]["name"], $_FILES['img']['tmp_name'])
				];
				if($info["img"] != null){
					$this->configurarModel->inserirImgPreview($info["img"], $num);
				}
				$this->configurar();

			}else{
				$this->view('pagenotfound');
			}
		}

		public function alterarPost($num = 0){
			if($this->helpers->sessionValidate() and $num >= 1 and $num <= 3 and $num != null and !empty($num)){
				$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT);
				$this->configurarModel->inserirPostPreview($form["selectPost"], $num);
				$this->configurar();

			}else{
				$this->view('pagenotfound');
			}
		}

		public function configurar(){
			if($this->helpers->sessionValidate()){
				$dados = [
					"maisVisitados" 	=> $this->viagemModel->postsMaisVisitados(),
					"posts"				=> $this->viagemModel->buscaPostsPorSlug(),
					"img1"				=> $this->configurarModel->buscaImg(1, BUSCA_POST_PREVIEW),
					"img2"				=> $this->configurarModel->buscaImg(2, BUSCA_POST_PREVIEW),
					"img3"				=> $this->configurarModel->buscaImg(3, BUSCA_POST_PREVIEW),
					"post1"				=> $this->configurarModel->buscaPost(1, BUSCA_POST_PREVIEW),
					"post2"				=> $this->configurarModel->buscaPost(2, BUSCA_POST_PREVIEW),
					"post3"				=> $this->configurarModel->buscaPost(3, BUSCA_POST_PREVIEW),
					"textoPrivacidade"  => $this->configurarModel->buscaTexto("privacidade"),
					"textoHome"  		=> $this->configurarModel->buscaTexto("home"),
					"textoRodape"  		=> $this->configurarModel->buscaTexto("rodape")
				];
				$this->view('admin/configurar', $dados);
			}else
				$this->view('pagenotfound');
		}

		public function aplicarAlteracoesImg(){
			if($this->helpers->sessionValidate()){
				if($this->configurarModel->aplicarAlteracoesImg())
					$this->configurar();
				else{
					$this->configurar();
				}
			}else
				$this->view('pagenotfound');
		}

		public function descartarAlteracoesImg(){
			if($this->helpers->sessionValidate()){
				if($this->configurarModel->descartarAlteracoesImg())
					$this->configurar();
				else{
					$this->configurar();
				}
			}else
				$this->view('pagenotfound');
		}

		public function descartarAlteracoesPosts(){
			if($this->helpers->sessionValidate()){
				if($this->configurarModel->descartarAlteracoesPosts())
					$this->configurar();
				else{
					$this->configurar();
				}
			}else
				$this->view('pagenotfound');
		}

		public function aplicarAlteracoesPosts(){
			if($this->helpers->sessionValidate()){
				if($this->configurarModel->aplicarAlteracoesPosts())
					$this->configurar();
				else{
					$this->configurar();
				}
			}else
				$this->view('pagenotfound');
		}

		public function atualizaTexto($tipo){
			if($this->helpers->sessionValidate()){
				$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$this->configurarModel->atualizaTexto($form['texto'], $form['status'], $tipo);
				$this->configurar();
			}else{
				$this->view('pagenotfound');
			}
		}

		//tratar imagem recebida do formulário
		private function trataImagem($nome = null, $nomeTemp = null){
			if(empty($nome))
				return null;
			else{
				$dateTime = date('dmYhis');
				$path = $dateTime.$nome;
				$diretorio = "img/home/";
				move_uploaded_file($nomeTemp, $diretorio . $path);
				return $path;
			}
		}

    }

?>