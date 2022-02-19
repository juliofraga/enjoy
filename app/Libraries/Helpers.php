<?php 

    class Helpers{

        public function __construct()
        {
            
        }

        //Return if user is logged in the system or not
        public function sessionValidate(){
            if(isset($_SESSION["betj_user"]))
                return true;
            else
                return false;   
        }
		
		//função para setar uma sessão de usuario
		public function setSession($usuario){
			session_start("blog_enjoy_the_journey");
			$_SESSION["betj_user"] = $usuario;
		}
		
		public function fazLogoff(){
			session_destroy();
			echo "<script>window.location.href='".URL."';</script>";
		}
		
        //return São Paulo date time
        public function returnDateTime(){
            date_default_timezone_set('America/Sao_Paulo');
            $dateTime = date("Y-m-d H:i:s");
            return $dateTime;
        }
		
		//Cria slug do post 
		public function criaSlug($local, $data = null){
			if($data == null)
				$data = date('dmYhis');
			else 
				$data = $data.date('his');
			$slug = $local."-".$data;
			$mapa = [];
            $mapa['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
            $mapa['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
            $url = strtr(utf8_decode($slug), utf8_decode($mapa['a']), $mapa['b']);
            $url = strip_tags(trim($url));
            $url = str_replace(' ', '-', $url);
            $url = str_replace(['-----', '----', '---', '--'], '-', $url);

            return strtolower(utf8_decode($url));
		}

        public function formataData($data){
            $a = explode('-', $data);
            $dataFormatada = $a[2]."/".$a[1]."/".$a[0];
            if($dataFormatada == "00/00/0000")
                $dataFormatada = "";
            return $dataFormatada;
        }
    }

?>