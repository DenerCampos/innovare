<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Questionario extends CI_Controller { 

    public function __construct() {
        parent::__construct();
        //carregando modelo
    }

    /**
     * Index
     *
     * @return  View_Index
     */
    public function index(){
        $this->load->view('html/cabecalho', array( 
            "titulo" => "Novo questionário",
            "css" => ""));
        $this->load->view('menu/principal', array( 
            "titulo" => "Novo questionário"));  
        $this->load->view('home/index'); 
		$this->load->view('html/rodape', array(
            "js" => ""));
	}

    /**
     * Novo
     * Criar um novo questionario
     *
     * @return  View_Novo
     */
    public function novo(){
        $this->load->view('html/cabecalho', array( 
            "titulo" => "Novo questionário",
            "css" => ""));
        $this->load->view('menu/principal', array( 
            "titulo" => "Novo questionário"));  
        $this->load->view('questionario/novo'); 

		$this->load->view('html/rodape', array(
            "js" => ""));
    }

    /**
     * Editar questionario
     * Editar consiste em adicionar, mudar ordem ou remover perguntas.
     *
     * @return  View_Editar
     */
    public function editar($id = 0){
        if($id == 0) $id = $this->uri->segment(3, 0);
        //busca dados do questionario
        $questionario = $this->buscaQuestionario($id);
        
        $this->load->view('html/cabecalho', array( 
            "titulo" => "Edição questionário: $id",
            "css" => ""));
        $this->load->view('menu/principal', array( 
            "titulo" => "Edição questionário: ".$questionario['nome']));  
        $this->load->view('questionario/editar'); 

        $this->load->view('questionario/aberta');
        $this->load->view('questionario/numerico');
        $this->load->view('questionario/escolha_unica');

		$this->load->view('html/rodape', array(
            "js" => "questionario.js"));
    }


    /* =================== Funções ================== */
    /**
     * Buscar questionario
     * 
     * @param int $id Id do questionario
     * @return object Questionario
     * @author Dener Campos
     */
    private function buscaQuestionario($id){
        //teste
        $dados = array(
            "id" => 123,
            "nome" => "Primeiro questionário"
        );
        return $dados;
    }

}