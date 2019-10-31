<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 

    public function __construct() {
        parent::__construct();
        //carregando modelo
    }

    public function index(){
        $this->load->view('html/cabecalho', array( 
            "titulo" => "Home",
            "css" => ""));
        $this->load->view('menu/principal', array( 
            "titulo" => "Home"));  
        $this->load->view('home/index'); 
		$this->load->view('html/rodape', array(
            "js" => ""));
	}
}