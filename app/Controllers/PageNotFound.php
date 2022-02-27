<?php 
	
	class PagenotFound extends Controller{
		public function __construct()
        {
            $this->configurarModel = $this->model('ConfigurarModel');
			$_SESSION["textoRodape"] = $this->configurarModel->buscaTexto("rodape");
        }
		
		public function index(){
			$this->view("pagenotfound");
		}
		
	}
?>