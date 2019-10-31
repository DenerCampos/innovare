<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Topico_model extends CI_Model {
    var $id;
    var $nome;
    var $pergunta_id;    
    var $topico_id;

    public function __construct(){
        parent::__construct();  
    }

    /**
     * Novo
     * 
     * @param string $nome
     * @param int $pergunta_id
     * @param int $topico_id
     *  
     * @return object variavel
     * @author Dener Campos
     */
    public function novo($nome, $pergunta_id, $topico_id){
        $this->setNome($nome);
        $this->setPergunta_id($pergunta_id);
        $this->setTopico_id($topico_id);

        $id = $this->insert();
        if($id != 0) return $this->buscaId($id);
        else return false;
    }

    /**
     * Inserindo
     * 
     * @return int id inserido
     * @author Dener Campos
     */
    public function insert(){
        $this->db->insert("variavel", $this);
        if ($this->db->affected_rows() > 0) return $this->db->insert_id();
        else return 0;
    }

    /**
     * Deletando
     * 
     * @return int id deletado
     * @author Dener Campos
     */
    public function delete(){
        return $this->db->delete('variavel', array('id' => $this->getId()));
    }

    /**
     * Busca por ID 
     * 
     * @return object variavel
     * @author Dener Campos
     */
    public function buscaId($id){
        $query = $this->db->get_where('variavel', array('id' => $id));
        if($query->num_rows() == 1) return $query->custom_row_object(0, 'Variavel_model');
        else return false;
    }
    
    /**
     * Busca todos os variavel por id pergunta ou topico
     * 
     * @return array|object variavel
     * @author Dener Campos
     */
    public function busca($id, $tipo = "pergunta"){
        $query = $this->db->get_where('variavel', array($tipo.'_id' => $id));
        if($query->num_rows() >= 1) return $query->custom_result_object('Variavel_model'); 
        else return false;
    }

    /* =================== GET AND SET ================== */

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of pergunta_id
     */ 
    public function getPergunta_id()
    {
        return $this->pergunta_id;
    }

    /**
     * Set the value of pergunta_id
     *
     * @return  self
     */ 
    public function setPergunta_id($pergunta_id)
    {
        $this->pergunta_id = $pergunta_id;

        return $this;
    }

    /**
     * Get the value of topico_id
     */ 
    public function getTopico_id()
    {
        return $this->topico_id;
    }

    /**
     * Set the value of topico_id
     *
     * @return  self
     */ 
    public function setTopico_id($topico_id)
    {
        $this->topico_id = $topico_id;

        return $this;
    }
}