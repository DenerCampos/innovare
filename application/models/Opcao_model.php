<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Opcao_model extends CI_Model {
    var $id;
    var $ordem;
    var $codigo;
    var $label;
    var $pergunta_id;
    var $topico_id;

    public function __construct(){
        parent::__construct();  
    }

    /**
     * Novo
     * 
     * @param int $ordem 
     * @param int $codigo
     * @param string $label
     * @param int $pergunta_id
     * @param int $topico_id
     *  
     * @return object Opcao
     * @author Dener Campos
     */
    public function novo($ordem, $codigo, $label, $pergunta_id, $topico_id){
        $this->setOrdem($ordem);
        $this->setCodigo($codigo);
        $this->setLabel($label);
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
        $this->db->insert("opcao", $this);
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
        return $this->db->delete('opcao', array('id' => $this->getId()));
    }

    /**
     * Busca por ID 
     * 
     * @return object opcao
     * @author Dener Campos
     */
    public function buscaId($id){
        $query = $this->db->get_where('opcao', array('id' => $id));
        if($query->num_rows() == 1) return $query->custom_row_object(0, 'Opcao_model');
        else return false;
    }
    
    /**
     * Busca opções de acordo com o tipo (pergunta ou topico)
     * 
     * @return array|object opcao
     * @author Dener Campos
     */
    public function buscaOpcoes($id, $tipo = "pergunta"){
        $query = $this->db->get_where('opcao', array($tipo.'_id' => $id));
        if($query->num_rows() >= 1) return $query->custom_result_object('Opcao_model'); 
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
     * Get the value of ordem
     */ 
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Set the value of ordem
     *
     * @return  self
     */ 
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

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