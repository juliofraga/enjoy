<?php
class ViagemModel
{
    private $db;
    private $tabela = 'post';

    public function __construct()
    {
        $this->db = new Database();
    }
	//Retorna todos os posts cadastrados, ordenando por data da postagem
    public function buscaPosts()
    {
        $this->db->query("SELECT codpos, slug, local, ponpos, ponneg, ovevia, datpos, camimg1, camimg2, camimg3 FROM post WHERE stapos = 'Aprovado' order by datpos DESC");
        return $this->db->results();
    }
	
	//Retorna todos os posts cadastrados, ordenando por slug
    public function buscaPostsPorSlug()
    {
        $this->db->query("SELECT codpos, slug FROM post WHERE stapos = 'Aprovado' order by slug ASC");
        return $this->db->results();
    }
	
	//cadastrar post
    public function cadastrar($dados)
    {
		$this->db->query("INSERT INTO post(nomaut, local, slug, datvia, ponpos, ponneg, ovevia, insaut, autcom, camimg1, camimg2, camimg3, datpos, stapos) VALUES (:nome, :local, :slug, :data, :pontopositivo, :pontonegativo, :overview, :instagram, :autorizacao, :imagem1, :imagem2, :imagem3, :datahora, :status)");
        $this->db->bind("nome", $dados['nome']);
		$this->db->bind("local", $dados['localViagem']);
		$this->db->bind("slug", $dados['slug']);
		$this->db->bind("data", $dados['data']);
		$this->db->bind("pontopositivo", $dados['maisGostou']);
		$this->db->bind("pontonegativo", $dados['menosGostou']);
		$this->db->bind("overview", $dados['comentarios']);
		$this->db->bind("instagram", $dados['instagram']);
		$this->db->bind("autorizacao", $dados['autorizacao']);
		$this->db->bind("imagem1", $dados['img1']);
		$this->db->bind("imagem2", $dados['img2']);
		$this->db->bind("imagem3", $dados['img3']);
		$this->db->bind("datahora", $dados['dataHora']);
		$this->db->bind("status", "Pendente");

        if($this->db->execQuery()){
            return true;
        }else{
            return false;
        }
    }
	//Buscar post por slug
    public function buscaPorSlug($slug, $tipo)
    {
        if($tipo == "exibir"){
            $this->db->query("UPDATE post SET numvis = numvis + 1 WHERE slug = :slug");
            $this->db->bind("slug", $slug);
            $this->db->execQuery();
        }
		$this->db->query("SELECT * FROM post WHERE slug = :slug");
        $this->db->bind("slug", $slug);
        return $this->db->results();
    }
	
	//Buscar por posts pendentes de aprovação
    public function buscaPendentesAprovacao()
    {
        $this->db->query("SELECT local, ovevia, codpos, slug FROM post WHERE stapos = :status or stapos = :outroStatus");
        $this->db->bind("status", "Pendente");
		$this->db->bind("outroStatus", "Recusado");
        return $this->db->results();
    }
	
    //Alterar status do post
    public function alteraStatusPost($codigo, $status)
    {
		$this->db->query("UPDATE post SET stapos = :status WHERE codpos = :codigo");
		if($status == "A")
			$this->db->bind("status", "Aprovado");
		else if($status == "R")
			$this->db->bind("status", "Recusado");
		$this->db->bind("codigo", $codigo);
		$this->db->execQuery();
    }
	
	public function excluiPost($codigo){
		$this->db->query("DELETE FROM post WHERE codpos = :codigo");
        $this->db->bind("codigo", $codigo);
		$this->db->execQuery();
	}
	
	public function postsMaisVisitados(){
		$this->db->query("SELECT local, numvis, slug FROM post ORDER BY numvis DESC LIMIT 5");
        return $this->db->results();
	}

    public function buscaPostPorCod($id)
    {
		$this->db->query("SELECT * FROM post WHERE codpos = :id");
        $this->db->bind("id", $id);
        return $this->db->results();
    }
}
