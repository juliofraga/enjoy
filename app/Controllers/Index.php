<?php 

    class Index extends Controller{

        public function __construct()
        {
            $this->configurarModel = $this->model('ConfigurarModel');
            $this->viagemModel = $this->model('ViagemModel');
            $this->helpers = new Helpers();
			$_SESSION["textoRodape"] = $this->configurarModel->buscaTexto("rodape");
        }
        
        public function index(){
            $dados = [
                "dados"      => "",
                "status"     => "",
                "img1" 	     => $this->configurarModel->buscaImg(1, BUSCA_POST_INDEX),
                "img2"	     => $this->configurarModel->buscaImg(2, BUSCA_POST_INDEX),
                "img3" 	     => $this->configurarModel->buscaImg(3, BUSCA_POST_INDEX),
                "post1"      => $this->viagemModel->buscaPostPorCod($this->retornaPostId(1, BUSCA_POST_INDEX)),
                "post2"      => $this->viagemModel->buscaPostPorCod($this->retornaPostId(2, BUSCA_POST_INDEX)),
                "post3"      => $this->viagemModel->buscaPostPorCod($this->retornaPostId(3, BUSCA_POST_INDEX)),
                "textoHome"  => $this->configurarModel->buscaTexto("home")
            ];
            $this->view('index', $dados);
        }

        public function homePreview(){
            if($this->helpers->sessionValidate()){
                $dados = [
                    "dados"  => "",
                    "status" => "",
                    "img1" 	 => $this->configurarModel->buscaImg(1, BUSCA_POST_PREVIEW),
                    "img2"	 => $this->configurarModel->buscaImg(2, BUSCA_POST_PREVIEW),
                    "img3" 	 => $this->configurarModel->buscaImg(3, BUSCA_POST_PREVIEW),
                    "post1"  => $this->viagemModel->buscaPostPorCod($this->retornaPostId(1, BUSCA_POST_PREVIEW)),
                    "post2"  => $this->viagemModel->buscaPostPorCod($this->retornaPostId(2, BUSCA_POST_PREVIEW)),
                    "post3"  => $this->viagemModel->buscaPostPorCod($this->retornaPostId(3, BUSCA_POST_PREVIEW))
                ];
                $this->view('admin/homePreview', $dados);
            }else
                $this->view('pagenotfound');
        }

        private function retornaPostId($num, $tipo){
            $info = $this->configurarModel->buscaPost($num, $tipo);
            if($info > 0){
                $post = "post".$num;
                return $info[0]->$post;
            }else{
                return 0;
            }
        }
    }

?>