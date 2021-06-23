<?php 

    class Viagem extends Controller{

        public function __construct()
        {
			$this->viagemModel = $this->model('ViagemModel');
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
		//INSERIR NO BANCO OPÇÃO PARA TER TÍTULO DO POST//
		public function cadastrar(){
			$form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form['finalizar'])){
				$this->trataImagem($form["img1"]);
				$this->trataImagem($form["img2"]);
				$this->trataImagem($form["img3"]);
				$dados = [
					"nome" => trim($form["txtNome"]),
					"localViagem" => trim($form["txtLocalViagem"]), 
					"data" => trim($form["dtQuando"]),
					"maisGostou" => trim($form["txtMaisGostou"]),
					"menosGostou" => trim($form["txtMenosGostou"]),
					"comentarios" => trim($form["txtComentarios"]),
					"instagram" => trim($form["txtInstagram"]),
					"autorizacao" => trim($form["selAutoriza"]),
					"img1" = > "",
					"img2" = > "",
					"img3" = > "",
				];
				if(empty($dados["localViagem"])){
					$dados = [
						"resultado" => "erro",
                        "mensagem"  => "O local da viagem deve ser informado!"
					];
					$this->view('viagem/finalizar', $dados);
				}else if(empty($dados["maisGostou"]) and empty($dados["maisGostou"]) and empty($dados["comentarios"])){
					$dados = [
						"resultado" => "erro",
                        "mensagem"  => "Não conseguimos registrar seu post, pois temos poucas informações, nos dê mais informações sobre a sua viagem, nos fale sobre algo que você gostou ou que não gostou, por exemplo!!"
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
		
		//tratar imagem recebida do formulário
		private function trataImagem($img = null){
			
		}
    }

?>