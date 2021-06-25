<?php 

    class Admin extends Controller{

        public function __construct()
        {
			$this->usuarioModel = $this->model('UsuarioModel');
			$this->viagemModel = $this->model('ViagemModel');
			$this->helpers = new Helpers();
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
		
		public function configurar(){
			if($this->helpers->sessionValidate()){
				$dados = [
					"maisVisitados" => $this->viagemModel->postsMaisVisitados()
				];
				$this->view('admin/configurar', $dados);
			}else
				$this->view('pagenotfound');
		}

    }

?>