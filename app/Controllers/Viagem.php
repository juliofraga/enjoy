<?php 

    class Viagem extends Controller{

        public function __construct()
        {
        }
        
        public function postar(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('viagem/postar', $dados);
        }

        public function postagens(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('viagem/postagens', $dados);
        }

        public function post($id = null){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('viagem/post', $dados);
        }
    }

?>