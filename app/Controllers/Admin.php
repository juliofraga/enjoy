<?php 

    class Admin extends Controller{

        public function __construct()
        {
        }
        
        public function index(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('admin/index', $dados);
        }

        public function aprovacao(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('admin/aprovacao', $dados);
        }

    }

?>