<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_consultas extends CI_Model
{
    public function getCategorias()
    {
        $this->db->select('*');
        $this->db->from('cj_categoria');
        return $this->db->get();
    }
}

/* End of file M_consultas.php */
