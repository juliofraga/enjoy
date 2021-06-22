<?php 

    class Viagem extends Controller{

        public function __construct()
        {
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
        public function postagens(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('viagem/postagens', $dados);
        }
		//exibir um post específico
        public function post($id = null){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('viagem/post', $dados);
        }
		//inserir no banco de dados as informações da viagem
		public function cadastrar(){
			$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form['finalizar'])){
				$dados = [
					"nome" => trim($form["txtNome"]),
					"localViagem" => trim($form["txtLocalViagem"]),
					"data" => trim($form["dtquando"]),
					"maisGostou" => trim($form["txtMaisgostou"]),
					"menosGostou" => trim($form["txtMenosgostou"]),
					"comentarios" => trim($form["txtComentarios"]),
					"instagram" => trim($form["txtInstagram"]),
					"autorizacao" => trim($form["selAutoriza"]),
				];
				if(empty($dados["localViagem"])){
					$dados = [
						"resultado" => "erro",
                        "mensagem"  => "O local da viagem deve ser informado!"
					];
					$this->view('viagem/finalizar', $dados);
				}else if(empty($dados["maisGostou"]) or empty($dados["maisGostou"]) or empty($dados["comentarios"])){
					$dados = [
						"resultado" => "erro",
                        "mensagem"  => "Nos dê mais informações sobre a sua viagem, nos fale sobre algo que você gostou ou que não gostou, por exemplo!!"
					];
					$this->view('viagem/finalizar', $dados);
				}else{
					//insere no banco
					$dados = [
						"resultado" => "sucesso",
                        "mensagem"  => "Obrigado por nos contar a sua experiência, em breve vamos liberar o seu post no nosso blog!!"
					];
					$this->view('viagem/finalizar', $dados);
				}
			}else{
                $this->view('viagem/postar');
            }
		}
    }

?>