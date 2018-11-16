<?php
defined('BASEPATH') OR exit('O acesso direto a esse script não é permitido');

/**
 * Controlador das páginas que podem ser acessadas sem o usuário estar logado.
 */
class Sysvis extends Base_Controller {

    // Construtor e inicio da sessao
    public function __construct() {
        parent::__construct();
    }

    /**
     * Exibe a Home do sistema (Funcao padrao do controlador).
     */
    public function index() {        
        $this->load->view("dashboard");
    }
    
    /**
     * Exibe a página de erro 404 do sistema. Para testar, basta chamar uma
     * página inexistente na url.
     */
    public function errorPage() {
        $this->load->view("errors/error404");
    }
}
