<?php
class Painel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('logar_model');
        $this->load->model('perfil_model');
        $this->load->model('familia_model');
        $this->load->model('agente_model');
        $this->load->model('conf');
        $this->logar_model->protege();
    }



    public function index() {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();

        $this->load->view('include/header', $dados);
        $this->load->view('painel/home', $dados);
        $this->load->view('include/footer');
    }

    
    public function familia($pag = null, $par = null) {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();
        $dados['familia'] = $this->familia_model->retorna_todos_familias();

        $this->load->view('include/header', $dados);

        if($pag == null){
            $this->load->view('painel/familia/home', $dados);  
        }


        if($pag == "inserir"){
            if($this->input->post('inserir') != null){
                $nome = $this->input->post('nome');
                $endereco = $this->input->post('endereco');
                $telefone = $this->input->post('telefone');
                $cartao_sus = $this->input->post('cartao_sus');
                $sexo = $this->input->post('sexo');
                $raca_cor = $this->input->post('raca_cor');
                $data_nas = $this->input->post('data_nas');
                $situacao_conj = $this->input->post('situacao_conj');
                $resultado = $this->familia_model->inserir($nome,$endereco,$telefone,$cartao_sus,$sexo,$raca_cor,
                        $data_nas, $situacao_conj);
                if($resultado){
                    $this->conf->set_alertas("success|Membro Familiar inserido com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema! Contate o administrador!");
                }
                redirect('painel/familia');
            }
            $this->load->view('painel/familia/inserir', $dados);  
        }


        if($pag == "alterar"){
            if($this->input->post('alterar') != null){
                $nome = $this->input->post('nome');
                $endereco = $this->input->post('endereco');
                $telefone = $this->input->post('telefone');
                $cartao_sus = $this->input->post('cartao_sus');
                $sexo = $this->input->post('sexo');
                $raca_cor = $this->input->post('raca_cor');
                $data_nas = $this->input->post('data_nas');
                $situacao_conj = $this->input->post('situacao_conj');
                $resultado = $this->familia_model->alterar($par, $nome,$endereco,$telefone,$cartao_sus,$sexo,$raca_cor,
                        $data_nas, $situacao_conj);
                if($resultado){
                    $this->conf->set_alertas("success|Membro Familiar alterado com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema! Contate o administrador!");
                }
                redirect('painel/familia');
            }
            $dados['familia'] = $this->familia_model->ver($par);
            $this->load->view('painel/familia/alterar', $dados);
        }


        if($pag == "apagar"){
            if($this->input->post('apagar') != null){
                $resultado = $this->familia_model->apagar($par);
                if($resultado){
                    $this->conf->set_alertas("success|Membro Familiar removido com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema! Contate o administrador!");
                }
                redirect('painel/familia');
            }
            $dados['familia'] = $this->familia_model->ver($par);
            $this->load->view('painel/familia/apagar', $dados);
        }

        
        $this->load->view('include/footer');
    }
    
    public function agente($pag = null, $par = null) {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();
        $dados['agente'] = $this->agente_model->retorna_todos_agentes();

        $this->load->view('include/header', $dados);
        $this->logar_model->permit($dados);

        if($pag == null){
            $this->load->view('painel/agente/home', $dados);  
        }


        if($pag == "inserir"){
            if($this->input->post('inserir') != null){
                $nome_ag = $this->input->post('nome_ag');
                $cpf_ag = $this->input->post('cpf_ag');
                $bairro_tra= $this->input->post('bairro_tra');
                $telefone = $this->input->post('telefone');
                $resultado = $this->agente_model->inserir($nome_ag,$cpf_ag,$bairro_tra,$telefone);
                if($resultado){
                    $this->conf->set_alertas("success|Agente PSF inserido com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema! Contate o administrador!");
                }
                redirect('painel/agente');
            }
            $this->load->view('painel/agente/inserir', $dados);  
        }


        if($pag == "alterar"){
            if($this->input->post('alterar') != null){
               $nome_ag = $this->input->post('nome_ag');
                $cpf_ag = $this->input->post('cpf_ag');
                $bairro_tra= $this->input->post('bairro_tra');
                $telefone = $this->input->post('telefone');
                $resultado = $this->agente_model->inserir($nome_ag,$cpf_ag,$bairro_tra,$telefone);
                if($resultado){
                    $this->conf->set_alertas("success|Agente PSF alterado com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema! Contate o administrador!");
                }
                redirect('painel/agente');
            }
            $dados['agente'] = $this->agente_model->ver($par);
            $this->load->view('painel/agente/alterar', $dados);
        }


        if($pag == "apagar"){
            if($this->input->post('apagar') != null){
                $resultado = $this->agente_model->apagar($par);
                if($resultado){
                    $this->conf->set_alertas("success|Agente PSF removido com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema! Contate o administrador!");
                }
                redirect('painel/agente');
            }
            $dados['agente'] = $this->agente_model->ver($par);
            $this->load->view('painel/agente/apagar', $dados);
        }

        
        $this->load->view('include/footer');
    }
}
