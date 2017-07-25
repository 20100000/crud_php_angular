<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: tiago
 * Date: 24/07/2017
 * Time: 18:08
 */
class MsgController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
            json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $resp = $this->Menssagem->msg_all_data();


            json_output(200,$resp);
        }
    }

    public function detail($id)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
            json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $resp = $this->Menssagem->msg_detail_data($id);
            json_output(200,$resp);
        }
    }

    public function create()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'POST'){
            json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $respStatus = 200;
            $params = json_decode(file_get_contents('php://input'), TRUE);

            if ($params['msg'] == "" ) {
                $respStatus = 400;
                $resp = array('status' => 400,'message' =>  'Title & Author can\'t empty');
            } else {
                $params['data_envio'] = date('Y-m-d');
                $resp = $this->Menssagem->msg_create_data($params);
            }
            json_output($respStatus,$resp);
        }
    }

    public function update($id)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'PUT' ){
            json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $respStatus = 200;

            $params = json_decode(file_get_contents('php://input'), TRUE);
            if ($params['msg'] == "") {
                $respStatus = 400;
                $resp = array('status' => 400,'message' =>  'Title & Author can\'t empty');
            } else {
                $resp = $this->Menssagem->msg_update_data($id,$params);
            }
            json_output($respStatus,$resp);
        }
    }


    public function delete($id)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'DELETE' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
            json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $params =array("status"=>0);
            $resp = $this->Menssagem->msg_delete_data($id,$params);
            json_output(200,$resp);
        }
    }

    public function user()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
            json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $resp = $this->Menssagem->usuario_resourses();


            json_output(200,$resp);
        }
    }

}