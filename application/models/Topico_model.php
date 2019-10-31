<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Topico_model extends CI_Model {
    var $id;
    var $ordem;
    var $label;
    var $pergunta_id;

    public function __construct(){
        parent::__construct();  
    }

    /**
     * Novo
     * 
     * @param int $ordem 
     * @param string $label
     * @param int $pergunta_id
     *  
     * @return object Topico
     * @author Dener Campos
     */
    public function novo($ordem, $label, $pergunta_id){
        $this->setOrdem($ordem);
        $this->setLabel($label);
        $this->setPergunta_id($pergunta_id);

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
        $this->db->insert("topico", $this);
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
        return $this->db->delete('topico', array('id' => $this->getId()));
    }

    /**
     * Busca por ID 
     * 
     * @return object topico
     * @author Dener Campos
     */
    public function buscaId($id){
        $query = $this->db->get_where('topico', array('id' => $id));
        if($query->num_rows() == 1) return $query->custom_row_object(0, 'Topico_model');
        else return false;
    }
    
    /**
     * Busca todos os topicos por id pergunta
     * 
     * @return array|object topico
     * @author Dener Campos
     */
    public function busca($id){
        $query = $this->db->get_where('topico', array('pergunta_id' => $id));
        if($query->num_rows() >= 1) return $query->custom_result_object('Topico_model'); 
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
}