<?php 

    class Privacy extends Controller{

        public function __construct()
        {
        }
        
        public function index(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('privacy', $dados);
        }

    }

?>