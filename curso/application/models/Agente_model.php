<?php

class Agente_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function retorna_todos_agentes(){
        $this->db->select('*');
        $this->db->from('agente');
        return $this->db->get()->result();
    }
    
    function ver($id){
        $this->db->select('*');
        $this->db->from('agente');
        $this->db->where('id_ag', $id);
        return $this->db->get()->result()[0];
    }

    function inserir($nome_ag,$cpf_ag,$bairro_tra,$telefone){
        $data = array(
        'nome_ag' => $nome_ag,
        'cpf_ag' => $cpf_ag,
        'bairro_tra' =>$bairro_tra,
        'telefone' => $telefone,
        );
        $this->db->insert('agente', $data);
        return $this->db->affected_rows();
    }

    
    function alterar($id, $nome_ag,$cpf_ag,$bairro_tra,$telefone){
        $data = array(
        'nome_ag' => $nome_ag,
        'cpf_ag' => $cpf_ag,
        'bairro_tra' =>$bairro_tra,
        'telefone' => $telefone,
        );
        $this->db->where('id_ag', $id);
        $this->db->update('agente', $data);
        return $this->db->affected_rows();
    }



    function apagar($id){
        $this->db->where('id_ag', $id);
        $this->db->delete('agente');
        return $this->db->affected_rows();
    }
}

