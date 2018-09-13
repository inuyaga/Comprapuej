<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_insercion extends CI_Model
{
    public function setCategoria($datos)
    {
        $this->db->insert('cj_categoria', $datos);
        return $this->db->affected_rows();
    }

    public function setProductoInventario($producto)
    {
        $this->db->insert('cj_inventario', $producto);
        return $this->db->affected_rows();
    }
}

/* End of file M_insercion.php */
