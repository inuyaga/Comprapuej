<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_consultas');

        //Do your magic here
    }

    public function index()
    {

        $this->Head("Compraspuej | inicio");
        $this->load->view('Inicio');
        // $this->footer();
        $this->ScripYjquery();
        $this->load->view('Incluir/fin_body');
    }

    public function login()
    {
        $correo = $this->input->post('correo');
        $contraseña = $this->input->post('contraseña');

        $retorno = $this->M_consultas->if_existe_user($contraseña, $correo);

        foreach ($retorno->result() as $key) {
            $datos = array(
                'nombre' => $key->usuario_nombre,
                'correo' => $key->usuario_correo,
                'tipo_user' => $key->usuario_tipo,
                'login' => true,
            );

            $this->session->set_userdata($datos);

            redirect('', 'refresh');

        }

        redirect('inicio', 'refresh');

    }

    public function cerrar_sesion()
    {
        session_destroy();

        redirect('', 'refresh');

    }

    ////////////////////////////////////////////////////////////////////////////////////////////
    //Estructura de la pagina web
    public function Head($titulo)
    {
        $data['titulo'] = $titulo;
        $this->load->view('Incluir/head', $data);
    }

    public function NavBar()
    {
        $this->load->view('Incluir/NavBar');
    }
    public function BarraLateral()
    {
        $this->load->view('Incluir/BarraLateral');
    }
    public function footer()
    {
        $this->load->view('Incluir/footer');
    }
    public function ScripYjquery()
    {
        $this->load->view('Incluir/scriptYjquery');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////
}

/* End of file Inicio.php */
