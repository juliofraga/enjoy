<?php
class UsuarioModel
{
    private $db;
    private $tabela = 'usuario';

    public function __construct()
    {
        $this->db = new Database();
    }
	//Retorna todos os usuários cadastrados
    public function buscaUsuarios()
    {
        $this->db->query("SELECT codusu, emausu, nomusu, stausu FROM usuario order by nomusu ASC");
        return $this->db->results();
    }
	//cadastrar usuario
    public function cadastrar($dados)
    {
		$this->db->query("INSERT INTO usuario(emausu, nomusu, pasusu, stausu) VALUES (:email, :nome, :senha, :status)");
        $this->db->bind("email", $dados['email']);
        $this->db->bind("nome", $dados['nome']);
        $this->db->bind("senha", $dados['senha']);
        $this->db->bind("status", "Ativo");

        if($this->db->execQuery()){
            return true;
        }else{
            return false;
        }
    }
	//Verificar se e-mail informado para cadastro já está cadastrado no sistema
    public function buscaPorEmail($email)
    {
        $this->db->query("SELECT codusu FROM usuario WHERE emausu = :email");
        $this->db->bind("email", $email);
        $this->db->execQuery();
        if($this->db->numRows() > 0)
            return true;
        else
            return false;
    }
    //Alterar usuário
    public function update($dados)
    {
        if(empty($dados["senha"])){
			$this->db->query("UPDATE usuario SET nomusu = :nome, emausu = :email WHERE codusu = :codigo");
			$this->db->bind("nome", $dados["nome"]);
			$this->db->bind("email", $dados["email"]);
			$this->db->bind("codigo", $dados["codigo"]);
		}else{
			$this->db->query("UPDATE usuario SET nomusu = :nome, emausu = :email, pasusu = :senha WHERE codusu = :codigo");
			$this->db->bind("nome", $dados["nome"]);
			$this->db->bind("email", $dados["email"]);
            $this->db->bind("senha", $dados["senha"]);
			$this->db->bind("codigo", $dados["codigo"]);
		}
		$this->db->execQuery();
        if($this->db->numRows() > 0)
            return true;
        else
            return false;
    }
	//Excluir usuário
    public function deletarUsuario($codigo)
    {
		$this->db->query("DELETE FROM usuario WHERE codusu = :codigo");
        $this->db->bind("codigo", $codigo);
        $this->db->execQuery();
        if($this->db->numRows() > 0)
            return true;
        else
            return false;
    }
    //Verificar se dados de acesso são validos
    public function fazLogin($email, $senha)
    {
        $this->db->query("SELECT codusu FROM usuario WHERE emausu = :email and pasusu = :senha");
        $this->db->bind("email", $email);
        $this->db->bind("senha", $senha);
        $this->db->execQuery();
        return $this->db->results();
    }
}
