<?php

/**
 * Created by IntelliJ IDEA.
 * User: tiago
 * Date: 24/07/2017
 * Time: 18:10
 */
class Menssagem extends  CI_Model
{

    public function msg_all_data()
    {
        return $this->db->select('cadastro_msg.*,usuario.nome')->from('cadastro_msg')->join('usuario', 'usuario.id = cadastro_msg.id_usuario', 'left')->order_by('id','desc')->get()->result();

    }

    public function msg_detail_data($id)
    {
        return $this->db->select('id,msg,data_envio,id_usuario')->from('cadastro_msg')->where('id',$id)->order_by('id','desc')->get()->row();
    }

    public function msg_create_data($data)
    {
        $this->db->insert('cadastro_msg',$data);
        return array('status' => 201,'message' => 'Data has been created.');
    }

    public function msg_update_data($id,$data)
    {
        $this->db->where('id',$id)->update('cadastro_msg',$data);
        return array('status' => 200,'message' => 'Data has been updated.');
    }

    public function msg_delete_data($id, $data)
    {
        $this->db->where('id',$id)->update('cadastro_msg', $data);
        return array('status' => 200,'message' => 'Data has been deleted.');
    }

    public function usuario_resourses()
    {
        return $this->db->select('id,nome')->from('usuario')->where('status',1)->order_by('id','desc')->get()->result();
    }

}