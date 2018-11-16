<?php
defined('BASEPATH') OR exit('O acesso direto a esse script não é permitido');

/**
 * Controlador Base. Possui funcoes úteis em diversas páginas do sistema.
 * 
 * @author Mateus Toledo <mateus.henrique@b2ml.com.br>
 */
class Base_Controller extends CI_Controller {

    // Metodo construtor
    public function __construct() {
        parent::__construct();
    }

    /**
     * Obtém a data/horário atual no fuso de brasília.
     * 
     * @return string data/horário atual, no formato yyyy-mm-dd hh:mm:ss.
     */
    public function getCurrentDate() {
        // Definir timezone e horario
        $timezone = 'America/Sao_Paulo';
        $timestamp = time();

        // Criar timestamp com os parametros corretos
        $dt = new DateTime("now", new DateTimeZone($timezone));
        $dt->setTimestamp($timestamp);

        // Retornar data
        return $dt->format('Y-m-d H:i:s');
    }
}
