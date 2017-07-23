<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: tiago
 * Date: 22/07/2017
 * Time: 17:32
 */
class Usuario extends CI_Model
{
    public function usuario_all_data()
    {
        return $this->db->select('id,nome,data_nasc,data_cad,biografia')->from('usuario')->order_by('id','desc')->get()->result();
    }

    public function usuario_detail_data($id)
    {
        return $this->db->select('id,nome,data_nasc,data_cad,biografia')->from('usuario')->where('id',$id)->order_by('id','desc')->get()->row();
    }

    public function usuario_create_data($data)
    {
        $this->db->insert('usuario',$data);
        return array('status' => 201,'message' => 'Data has been created.');
    }

    public function usuario_update_data($id,$data)
    {
        $this->db->where('id',$id)->update('usuario',$data);
        return array('status' => 200,'message' => 'Data has been updated.');
    }

    public function usuario_delete_data($id)
    {
        $this->db->where('id',$id)->delete('usuario');
        return array('status' => 200,'message' => 'Data has been deleted.');
    }

}