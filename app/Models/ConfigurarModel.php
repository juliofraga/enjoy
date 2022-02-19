<?php
    class ConfigurarModel
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function inserirImgPreview($img, $pos){
            $id = $this->buscaImgPreview($pos);
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
            $id = $this->buscaPostPreview($pos);
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

        public function buscaImgPreview($pos){
            if($pos == 1){
                $this->db->query("SELECT * FROM homepageimg WHERE img1 IS NOT NULL AND tipo = :zero");
            }else if($pos == 2){
                $this->db->query("SELECT * FROM homepageimg WHERE img2 IS NOT NULL AND tipo = :zero");
            }else if($pos == 3){
                $this->db->query("SELECT * FROM homepageimg WHERE img3 IS NOT NULL AND tipo = :zero");
            }
            $this->db->bind("zero", 0);
            $this->db->execQuery();
            if($this->db->numRows() > 0)
                return $this->db->results();
            else
                return 0;
        }

        public function buscaPostPreview($pos){
            if($pos == 1){
                $this->db->query("SELECT * FROM homepagepost WHERE post1 IS NOT NULL AND tipo = :zero");
            }else if($pos == 2){
                $this->db->query("SELECT * FROM homepagepost WHERE post2 IS NOT NULL AND tipo = :zero");
            }else if($pos == 3){
                $this->db->query("SELECT * FROM homepagepost WHERE post3 IS NOT NULL AND tipo = :zero");
            }
            $this->db->bind("zero", 0);
            $this->db->execQuery();
            if($this->db->numRows() > 0)
                return $this->db->results();
            else
                return 0;
        }

        public function aplicarAlteracoesImg(){
            $this->db->query("UPDATE homepageimg SET tipo = :um WHERE tipo = :zero");
            $this->db->bind("um", 1);
            $this->db->bind("zero", 0);
		    $this->db->execQuery();
            if($this->db->numRows() > 0)
                return true;
            else
                return false;
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
            $this->db->query("UPDATE homepagepost SET tipo = :um WHERE tipo = :zero");
            $this->db->bind("um", 1);
            $this->db->bind("zero", 0);
		    $this->db->execQuery();
            if($this->db->numRows() > 0)
                return true;
            else
                return false;
        }
    }
?>