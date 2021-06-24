<?php
class ViagemModel
{
    private $db;
    private $tabela = 'post';

    public function __construct()
    {
        $this->db = new Database();
    }
	//Retorna todos os posts cadastrados
    public function buscaPosts()
    {
        $this->db->query("SELECT slug, local, ponpos, ponneg, ovevia, datpos, camimg1 FROM post WHERE stapos = 'Aprovado' order by datpos DESC");
        return $this->db->results();
    }
	//cadastrar post
    public function cadastrar($dados)
    {
		$this->db->query("INSERT INTO post(nomaut, local, slug, datvia, ponpos, ponneg, ovevia, insaut, autcom, camimg1, camimg2, camimg3, stapos) VALUES (:nome, :local, :slug, :data, :pontopositivo, :pontonegativo, :overview, :instagram, :autorizacao, :imagem1, :imagem2, :imagem3, :status)");
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
		$this->db->bind("status", "Pendente");

        if($this->db->execQuery()){
            return true;
        }else{
            return false;
        }
    }
	//Verificar se título do post já existe
    public function buscaPorSlug($slug)
    {
        $this->db->query("SELECT * FROM post WHERE slug = :slug");
        $this->db->bind("slug", $slug);
        return $this->db->results();
    }
	
    //Alterar status do post
    public function updateStatus($status, $codigo)
    {
		$this->db->query("UPDATE post SET status = :status WHERE codpos = :codigo");
		$this->db->bind("status", $status);
		$this->db->bind("codigo", $codigo);

		$this->db->execQuery();
        if($this->db->numRows() > 0)
            return true;
        else
            return false;
    }
}
