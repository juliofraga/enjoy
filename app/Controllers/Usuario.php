<?php 

    class Usuario extends Controller{

        public function __construct()
        {
        }
        
        public function cadastro(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('usuario/cadastro', $dados);
        }

    }

?>