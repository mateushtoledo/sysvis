<?php
defined('BASEPATH') OR exit('O acesso direto a esse script não é permitido');

class Company_model extends Base_model {
    // Atributos
    private $id;
    private $register_date;
    private $accept_date;
    private $cancel_date;
    private $active;
    private $activity_sector;
    private $uf;
    private $life_days;
    private $register_year;
    private $cancel_year;
    
    // Construtor
    function __construct() {
        parent::__construct();
    }
    
    // Setters
    function setId($id) {
        $this->id = $id;
    }

    function setRegister_date($register_date) {
        $this->register_date = $register_date;
    }

    function setAccept_date($accept_date) {
        $this->accept_date = $accept_date;
    }

    function setCancel_date($cancel_date) {
        $this->cancel_date = $cancel_date;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setActivity_sector($activity_sector) {
        $this->activity_sector = $activity_sector;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setLife_days($life_days) {
        $this->life_days = $life_days;
    }

    function setRegister_year($register_year) {
        $this->register_year = $register_year;
    }

    function setCancel_year($cancel_year) {
        $this->cancel_year = $cancel_year;
    }

    // Getters
    function getId() {
        return $this->id;
    }

    function getRegister_date() {
        return $this->register_date;
    }

    function getAccept_date() {
        return $this->accept_date;
    }

    function getCancel_date() {
        return $this->cancel_date;
    }

    function getActive() {
        return $this->active;
    }

    function getActivity_sector() {
        return $this->activity_sector;
    }

    function getUf() {
        return $this->uf;
    }

    function getLife_days() {
        return $this->life_days;
    }

    function getRegister_year() {
        return $this->register_year;
    }

    function getCancel_year() {
        return $this->cancel_year;
    }
}
