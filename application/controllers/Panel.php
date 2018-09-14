<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Panel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_insercion');
        $this->load->model('M_consultas');
    }

    public function index()
    {
        $this->Head("Compraspuej | Panel");
        $this->NavBar();
        $this->load->view('Panel/panel.php');
        $this->footer();
        $this->ScripYjquery();
        $this->load->view('Panel/Incluir/fin_body');

    }

    ////////////////////////////////////////////////////////////////////////////////////////////
    //Estructura de la pagina web
    public function Head($titulo)
    {
        $data['titulo'] = $titulo;
        $this->load->view('Panel/Incluir/head', $data);
    }

    public function NavBar()
    {
        $this->load->view('Panel/Incluir/NavBar');
    }
    public function BarraLateral()
    {
        $this->load->view('Panel/Incluir/BarraLateral');
    }
    public function footer()
    {
        $this->load->view('Panel/Incluir/footer');
    }
    public function ScripYjquery()
    {
        $this->load->view('Panel/Incluir/scriptYjquery');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////

    public function Compras()
    {
        $this->Head("Compraspuej | Compras");
        $this->NavBar();
        $this->BarraLateral();
        $this->load->view('Panel/panel.php');
        $this->footer();
        $this->ScripYjquery();
    }

    public function categorias()
    {
        $dato['categorias'] = $this->M_consultas->getCategorias();
        $this->Head("Compraspuej | Categorias");
        $this->NavBar();
        // $this->BarraLateral();
        $this->load->view('Panel/Categorias.php', $dato);
        // $this->footer();
        $this->ScripYjquery();
    }

    public function crea_categoria()
    {
        $nombre = $this->input->post('nombre');
        $categoria = array(
            'categoria_nombre' => $nombre,
        );
        $query = $this->M_insercion->setCategoria($categoria);
        if ($query > 0) {
            $this->session->set_flashdata('mensaje', '
           <div class="callout success" data-closable="slide-out-right">
              <h5>ok</h5>
                <p>Categoria guardad con exito</p>
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
           ');

            redirect('Panel/categorias', 'refresh');
        } else {
            $this->session->set_flashdata('mensaje', '
            <div class="callout alert" data-closable>
                <h5>Error</h5>
                <p>Error al intentar guardar</p>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ');
            redirect('Panel/categorias', 'refresh');
        }
    }

    public function newProducto()
    {
        $this->Head("Compraspuej | Nuevo Producto");
        $this->NavBar();

        $this->load->view('Panel/newProducto');

        $this->ScripYjquery();
    }

    public function nuevo_producto_save()
    {
        $config['upload_path'] = './publico/imagenes/productos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $nombre_prod = $this->input->post('nombre_prod');
        $descripcion = $this->input->post('descripcion');
        $cantidad = $this->input->post('cantidad');
        $precio_reposicion = $this->input->post('precio_reposicion');

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imagen_prod')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('mensaje', '
            <div class="callout alert" data-closable>
                <h5>Error</h5>
                <p>' . $this->upload->display_errors() . '</p>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            ');
            redirect('panel/newProducto', 'refresh');
        } else {
            $datos["img"] = $this->upload->data();

            $product = array(
                'invent_nombre' => $nombre_prod,
                'invent_descripcion' => $descripcion,
                'invent_cantidad' => $cantidad,
                'invent_precio' => $precio_reposicion,
                'invent_imagen' => '/publico/imagenes/productos/' . $datos["img"]['file_name'],
            );

            $query = $this->M_insercion->setProductoInventario($product);

            if ($query > 0) {
                $this->session->set_flashdata('mensaje', '
               <div class="callout success" data-closable="slide-out-right">
                  <h5>ok</h5>
                    <p>Producto guardado con exito</p>
                    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               ');

                redirect('panel/newProducto', 'refresh');
            } else {
                $this->session->set_flashdata('mensaje', '
                <div class="callout alert" data-closable>
                    <h5>Error</h5>
                    <p>Error al intentar guardar</p>
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                ');
                redirect('panel/newProducto', 'refresh');
            }
        }
    }
}

/* End of file Panel.php */
