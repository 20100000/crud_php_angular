<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('partials/home');

	}

	public  function collection(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$resp = $this->Usuario->usuario_all_data();
			json_output(200,$resp);
		}
	}

	public function detail($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$resp = $this->Usuario->usuario_detail_data($id);
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
			if ($params['nome'] == "" ) {
				$respStatus = 400;
				$resp = array('status' => 400,'message' =>  'Title & Author can\'t empty');
			} else {
				$resp = $this->Usuario->usuario_create_data($params);
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
			if ($params['nome'] == "") {
				$respStatus = 400;
				$resp = array('status' => 400,'message' =>  'Title & Author can\'t empty');
			} else {
				$resp = $this->Usuario->usuario_update_data($id,$params);
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
			$resp = $this->Usuario->usuario_delete_data($id);
			json_output(200,$resp);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */