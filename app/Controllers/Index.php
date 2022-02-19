<?php 

    class Index extends Controller{

        public function __construct()
        {
            $this->configurarModel = $this->model('ConfigurarModel');
            $this->viagemModel = $this->model('ViagemModel');
            $this->helpers = new Helpers();
        }
        
        public function index(){
            $dados = [
                "dados"  => "",
                "status" => ""
            ];
            $this->view('index', $dados);
        }

        public function homePreview(){
            if($this->helpers->sessionValidate()){
                $dados = [
                    "dados"  => "",
                    "status" => "",
                    "img1" 	 => $this->configurarModel->buscaImgPreview(1),
                    "img2"	 => $this->configurarModel->buscaImgPreview(2),
                    "img3" 	 => $this->configurarModel->buscaImgPreview(3),
                    "post1"  => $this->viagemModel->buscaPostPorCod($this->retornaPostId(1)),
                    "post2"  => $this->viagemModel->buscaPostPorCod($this->retornaPostId(2)),
                    "post3"  => $this->viagemModel->buscaPostPorCod($this->retornaPostId(3))
                ];
                $this->view('admin/homePreview', $dados);
            }else
                $this->view('pagenotfound');
        }

        private function retornaPostId($num){
            $info = $this->configurarModel->buscaPostPreview($num);
            if($info > 0){
                $post = "post".$num;
                return $info[0]->$post;
            }else{
                return 0;
            }
        }
    }

?>