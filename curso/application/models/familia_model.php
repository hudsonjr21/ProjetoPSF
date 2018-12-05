<?php

class familia_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function retorna_todos_familias(){
        $this->db->select('*');
        $this->db->from('familia');
        return $this->db->get()->result();
    }
    
    function ver($id){
        $this->db->select('*');
        $this->db->from('familia');
        $this->db->where('id_fam', $id);
        return $this->db->get()->result()[0];
    }

    function inserir($nome,$endereco,$telefone,$cartao_sus,$sexo,$raca_cor,$data_nas,$situacao_conj){
        $data = array(
        'nome' => $nome,
        'endereco' => $endereco,
        'telefone' => $telefone,
        'cartao_sus' =>$cartao_sus,
        'sexo' =>$sexo,
        'raca_cor' => $raca_cor,
        'data_nas' => $data_nas,
        'situacao_conj' => $situacao_conj,
        );
        $this->db->insert('familia', $data);
        return $this->db->affected_rows();
    }

    
    function alterar($id, $nome,$endereco,$telefone,$cartao_sus,$sexo,$raca_cor,$data_nas,$situacao_conj){
        $data = array(
        'nome' => $nome,
        'endereco' => $endereco,
        'telefone' => $telefone,
        'cartao_sus' =>$cartao_sus,
        'sexo' =>$sexo,
        'raca_cor' => $raca_cor,
        'data_nas' => $data_nas,
        'situacao_conj' => $situacao_conj,
        );
        $this->db->where('id_fam', $id);
        $this->db->update('familia', $data);
        return $this->db->affected_rows();
    }



    function apagar($id){
        $this->db->where('id_fam', $id);
        $this->db->delete('familia');
        return $this->db->affected_rows();
    }
}

