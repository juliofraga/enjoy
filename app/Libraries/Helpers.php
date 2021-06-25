<?php 

    class Helpers{

        public function __construct()
        {
            
        }

        //Return if user is logged in the system or not
        public function sessionValidate(){
            if(isset($_SESSION["fun_coduser"]) and isset($_SESSION["fun_prousu"])){
                return true;
            }
            else{
                return false;   
            }   
        }
		
        //return São Paulo date time
        public function returnDateTime(){
            date_default_timezone_set('America/Sao_Paulo');
            $dateTime = date("Y-m-d H:i:s");
            return $dateTime;
        }
        //Return if the post is anonymous or not
        public function isAnonymous($param){
            if($param == 0)
                return false;
            else
                return true;
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
    }

?>