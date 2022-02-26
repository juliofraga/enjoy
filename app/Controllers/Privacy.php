<?php 

    class Privacy extends Controller{

        public function __construct()
        {
            $this->configurarModel = $this->model('ConfigurarModel');
        }
        
        public function index(){
            $dados = [
                "textoPrivacidade"  => $this->configurarModel->buscaTexto("privacidade")
            ];
            $this->view('privacy', $dados);
        }

    }

?>