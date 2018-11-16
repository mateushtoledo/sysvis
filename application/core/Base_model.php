<?php

/**
 * Model Base. Possui funções úteis para diversos models. Também possúi funções
 * genéricas para conexão com banco de dados.
 * 
 * @author Mateus Toledo <mateus.henrique@b2ml.com.br>
 */
class Base_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Salva no banco de dados. Sintaxe:
     * INSERT INTO {$tablename}({$key, $key2...}) VALUES({$value, $value2...}).
     * 
     * @param string $tablename Nome da tabela do banco.
     * @param array $data Dados a serem salvos no formato chave => valor.
     * 
     * @return bool Status da operaçao.
     */
    public function insert($tablename, $data) {
        // Definir campos e seus valores
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        // Executar SQL no banco
        return $this->db->insert($tablename);
    }
    
    
    /**
     * Busca do banco de dados.
     * 
     * @param type $tablename Nome da tabela em que serao buscados os dados.
     * @param type $where Array no formato chave =>  valor com as condiçoes da clausula where.
     * @param type $like Array no formato chave => valor com as condiçoes do like
     * @param type $orderBy Array no formato chave => valor com as condiçoes do order by
     * 
     * @return type array mysql result;
     */
    public function select($tablename, $where = [], $like = [], $orderBy = []) {
        $data = [];
        
        // Definir condicoes where
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        
        // Definir condicoes like
        foreach ($like as $key => $value) {
            $this->db->like($key, $value);
        }
        
        // Definir condicoes order by
        foreach ($orderBy as $field => $order) {
            $this->db->order_by($field, $order);
        }
        
        // Executar busca no banco
        $res = $this->db->get($tablename);
        
        // Se deu certo, adicionar resultados
        if($res) {
            foreach ($res->result() as $result) {
                $data[] = $result;
            }
        }
        
        // Retornar dados
        return $data;
    }
    
    /**
     * Atualiza do banco de dados
     * 
     * @param type $tablename Nome da tabela em que serao buscados os dados.
     * @param string $id Identificador da tupla.
     * @param type $data Array no formato atributo => valor com os dados que serao atualizados.
     * 
     * @return bool Status do update;
     */
    public function update($tablename, $id, $data) {
        // Setar os campos que quero atualizar e os novos valores
        foreach ($data as $key => $value) {
            $this->db->set($key, $value);
        }
        // Definir ID da tupla que sera atualizada
        $this->db->where('id', $id);
        
        // Retornar status da operaçao
        return $this->db->update($tablename) === true;
    }
    
    /**
     * Apaga uma tupla do banco de dados.
     * 
     * @param string $tablename Nome da tabela alvo.
     * @param string $id Identificador da tupla.
     * 
     * @return bool Status da remocao.
     */
    public function delete($tablename, $id) {
        // Definir ID da tupla que sera deletada
        $this->db->where('id', $id);
        
        // Deletar do banco
        return $this->db->delete($tablename) === true;
    }
    
    /**
     * Executa uma consulta SQL no banco.
     * 
     * @param type $sql Consulta a ser executada.
     * 
     * @return mysql_result Resultados da consulta.
     */
    public function query($sql) {
        // Executar SQL no banco
        return $this->db->query($sql);
    }
}
