<?php 

    class Index extends Controller{

        private $functions;

        public function __construct()
        {
        }
        
        public function index(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('index', $dados);
        }
    }

?>