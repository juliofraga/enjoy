<?php
    class ConfigurarModel
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function inserirImgPreview($img, $pos){
            $id = $this->buscaImg($pos, 0);
            if($id != 0){
                $this->deleteImgPreview($id[0]->id);
            }
            if($pos == 1){
                $this->db->query("INSERT INTO homepageimg(img1, tipo) VALUES (:img, :tipo)");
            }else if($pos == 2){
                $this->db->query("INSERT INTO homepageimg(img2, tipo) VALUES (:img, :tipo)");
            }else if($pos == 3){
                $this->db->query("INSERT INTO homepageimg(img3, tipo) VALUES (:img, :tipo)");
            }
            
            $this->db->bind("img", $img);
            $this->db->bind("tipo", "0");
            $this->db->execQuery();
        }

        public function inserirPostPreview($post, $pos){
            $id = $this->buscaPost($pos, 0);
            if($id != 0){
                $this->deletePostPreview($id[0]->id);
            }
            if($pos == 1){
                $this->db->query("INSERT INTO homepagepost(post1, tipo) VALUES (:post, :tipo)");
            }else if($pos == 2){
                $this->db->query("INSERT INTO homepagepost(post2, tipo) VALUES (:post, :tipo)");
            }else if($pos == 3){
                $this->db->query("INSERT INTO homepagepost(post3, tipo) VALUES (:post, :tipo)");
            }
            
            $this->db->bind("post", $post);
            $this->db->bind("tipo", "0");
            $this->db->execQuery();
        }

        public function deletePostPreview($id){
            $this->db->query("DELETE FROM homepagepost WHERE id = :id");
            $this->db->bind("id", $id);
            $this->db->execQuery();
        }


        public function deleteImgPreview($id){
            $this->db->query("DELETE FROM homepageimg WHERE id = :id");
            $this->db->bind("id", $id);
            $this->db->execQuery();
        }

        public function buscaImg($pos, $tipo){
            if($pos == 1){
                $this->db->query("SELECT * FROM homepageimg WHERE img1 IS NOT NULL AND tipo = :tipo");
            }else if($pos == 2){
                $this->db->query("SELECT * FROM homepageimg WHERE img2 IS NOT NULL AND tipo = :tipo");
            }else if($pos == 3){
                $this->db->query("SELECT * FROM homepageimg WHERE img3 IS NOT NULL AND tipo = :tipo");
            }
            $this->db->bind("tipo", $tipo);
            $this->db->execQuery();
            if($this->db->numRows() > 0)
                return $this->db->results();
            else
                return 0;
        }

        public function buscaPost($pos, $tipo){
            if($pos == 1){
                $this->db->query("SELECT * FROM homepagepost WHERE post1 IS NOT NULL AND tipo = :tipo");
            }else if($pos == 2){
                $this->db->query("SELECT * FROM homepagepost WHERE post2 IS NOT NULL AND tipo = :tipo");
            }else if($pos == 3){
                $this->db->query("SELECT * FROM homepagepost WHERE post3 IS NOT NULL AND tipo = :tipo");
            }
            $this->db->bind("tipo", $tipo);
            $this->db->execQuery();
            if($this->db->numRows() > 0)
                return $this->db->results();
            else
                return 0;
        }

        public function aplicarAlteracoesImg(){
            $this->db->query("DELETE FROM homepageimg WHERE tipo = :um");
            $this->db->bind("um", 1);
            if($this->db->execQuery()){
                $this->db->query("UPDATE homepageimg SET tipo = :um WHERE tipo = :zero");
                $this->db->bind("um", 1);
                $this->db->bind("zero", 0);
                $this->db->execQuery();
                if($this->db->numRows() > 0)
                    return true;
                else
                    return false;
            }else{
                return false;
            }
        }

        public function descartarAlteracoesImg(){
            $this->db->query("DELETE FROM homepageimg WHERE tipo = :zero");
            $this->db->bind("zero", 0);
		    $this->db->execQuery();
            if($this->db->numRows() > 0)
                return true;
            else
                return false;
        }

        public function descartarAlteracoesPosts(){
            $this->db->query("DELETE FROM homepagepost WHERE tipo = :zero");
            $this->db->bind("zero", 0);
		    $this->db->execQuery();
            if($this->db->numRows() > 0)
                return true;
            else
                return false;
        }

        public function aplicarAlteracoesPosts(){
            $this->db->query("DELETE FROM homepagepost WHERE tipo = :um");
            $this->db->bind("um", 1);
            if($this->db->execQuery()){
                $this->db->query("UPDATE homepagepost SET tipo = :um WHERE tipo = :zero");
                $this->db->bind("um", 1);
                $this->db->bind("zero", 0);
                $this->db->execQuery();
                if($this->db->numRows() > 0)
                    return true;
                else
                    return false;
            }else{
                return false;
            }
        }

        public function atualizaTexto($texto, $status, $tipo){
            if($this->buscaTexto($tipo) === 0){
                $this->db->query("INSERT INTO textos(nome, texto, status) VALUES (:nome, :texto, :status)");
                $this->db->bind("nome", $tipo);
                $this->db->bind("texto", $texto);
                $this->db->bind("status", $status);
                $this->db->execQuery();
            }else{
                $this->db->query("UPDATE textos SET texto = :texto, status = :status WHERE nome = :tipo");
                $this->db->bind("texto", $texto);
                $this->db->bind("status", $status);
                $this->db->bind("tipo", $tipo);
                $this->db->execQuery();
            }
        }

        public function buscaTexto($tipo){
            $this->db->query("SELECT * FROM textos WHERE nome = :tipo");
            $this->db->bind("tipo", $tipo);
            $this->db->execQuery();
            if($this->db->numRows() > 0)
                return $this->db->results();
            else
                return 0;
        }
    }
?>