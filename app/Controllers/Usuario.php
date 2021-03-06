<?php 

    class Usuario extends Controller{

        public function __construct()
        {
            $this->usuarioModel = $this->model('UsuarioModel');
			$this->helpers = new Helpers();
            $this->configurarModel = $this->model('ConfigurarModel');
            $_SESSION["textoRodape"] = $this->configurarModel->buscaTexto("rodape");
        }
        
        //Exibir tela de cadastro de usuários
        public function cadastro(){
			if($this->helpers->sessionValidate())
				$this->view('usuario/cadastro');
			else
				$this->view('pagenotfound');
        }

        //exibir usários cadastrados
        public function cadastrados(){
			if($this->helpers->sessionValidate()){
				$dados = [
					"informacoes" => $this->usuarioModel->buscaUsuarios(),
				];
				$this->view('usuario/cadastrados', $dados);
			}else
				$this->view('pagenotfound');
        }

        //Cadastrar o usuário
        public function cadastrar(){
            $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form['cadastrar'])){
                $dados = [
                    "nome"  => trim($form["txtNome"]),
                    "email" => trim($form["txtEmail"]),
                    "senha" => trim($form["txtSenha"]),
                    "RepeteSenha" => trim($form["txtRepeteSenha"])
                ];
                if($dados["senha"] != $dados["RepeteSenha"]){
                    $dados = [
                        "nome"  => trim($form["txtNome"]),
                        "email" => trim($form["txtEmail"]),
                        "resultado" => "erro",
                        "mensagem"  => "Senhas não conferem, tente novamente!"
                    ];
                    $this->view('usuario/cadastro', $dados);
                }else if($this->verificaEmailCadastrado($dados["email"])){
                    $dados = [
                        "nome"  => trim($form["txtNome"]),
                        "email" => trim($form["txtEmail"]),
                        "resultado" => "erro",
                        "mensagem"  => "E-mail informado já está cadastrado, tente novamente!"
                    ];
                    $this->view('usuario/cadastro', $dados);
                }else{
                    $dados["senha"] = password_hash($dados["senha"], PASSWORD_DEFAULT);
                    if($this->usuarioModel->cadastrar($dados)){
                        $dados = [
                            "resultado" => "sucesso",
                            "mensagem"  => "Usuário cadastrado com sucesso!"
                        ];
                        $this->view('usuario/cadastro', $dados);
                    }else{
                        $dados = [
                            "nome"  => trim($form["txtNome"]),
                            "email" => trim($form["txtEmail"]),
                            "resultado" => "erro",
                            "mensagem"  => "Erro ao inserir dados no banco de dados, tente novamente!"
                        ];
                        $this->view('usuario/cadastro', $dados);
                    }
                }
            }else{
                $this->view('pagenotfound');
            }
        }

        //alterar/deletar usuário
        public function alterar(){
            $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form['update'])){
                $dados = [
                    "codigo"    => $form["txtCodigo"],
                    "nome"      => trim($form["txtNome"]),
                    "email"     => trim($form["txtEmail"]),
                    "senha"     => trim($form["txtSenha"]),
                    "ConSenha"  => trim($form["txtConfirmaSenha"])
                ];
                if($dados["senha"] != $dados["ConSenha"]){
                    $dados = [
                        "resultado" => "erro",
                        "mensagem"  => "Senhas não conferem, tente alterar novamente!",
                        "informacoes" => $this->usuarioModel->buscaUsuarios(),
                    ];
                    $this->view('usuario/cadastrados', $dados);
                }else{
                    $dados["senha"] = password_hash($dados["senha"], PASSWORD_DEFAULT);
                    if($this->usuarioModel->update($dados)){
                            $dados = [
                                "resultado" => "sucesso",
                                "mensagem"  => "Usuário alterado com sucesso!",
                                "informacoes" => $this->usuarioModel->buscaUsuarios(),
                            ];
                            $this->view('usuario/cadastrados', $dados);
                    }else{
                        $dados = [
                            "resultado" => "erro",
                            "mensagem"  => "Erro ao alterar o usuário, tente novamente!",
                            "informacoes" => $this->usuarioModel->buscaUsuarios(),
                        ];
                        $this->view('usuario/cadastrados', $dados);
                    }
                }
            }else if(isset($form['delete'])){
                $dados = [
                    "codigo"    => $form["txtCodigo"]
                ];
                if($this->usuarioModel->deletarUsuario($dados["codigo"])){
                    $dados = [
                        "resultado" => "sucesso",
                        "mensagem"  => "Usuário deletado com sucesso!",
                        "informacoes" => $this->usuarioModel->buscaUsuarios(),
                    ];
                    $this->view('usuario/cadastrados', $dados);
                }else{
                    $dados = [
                        "resultado" => "erro",
                        "mensagem"  => "Erro ao deletar o usuário, tente novamente!",
                        "informacoes" => $this->usuarioModel->buscaUsuarios(),
                    ];
                    $this->view('usuario/cadastrados', $dados);
                }
            }else{
                $this->view('pagenotfound');
            }
        }

		// fazer logoff
		public function logoff(){
			$this->helpers->fazLogoff();
		}

        // Verificar se o e-mail informado já está cadastrado no sistema
        private function verificaEmailCadastrado($email){
            return $this->usuarioModel->buscaPorEmail($email);
        }
    }

?>