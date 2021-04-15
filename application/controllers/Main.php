<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index(){
		echo "I am Main Class!";
	}
	public function hello(){
        echo "Hello World !";
	}

    public function say($str){
        echo strtoupper($str);
    }

    public function say_anything($str){
        echo strtoupper($str);
    }

    public function danger(){
        redirect("/");
	}

	public function world(){
		$this->load->view("world");
	}

	public function ninja($number=1){
		$data['number'] = $number;
		$this->load->view("ninja",$data);
	}

	public function users(){
		$this->load->view("users/index");
	}

	public function new(){
		$this->load->view("users/new");
	}

	public function create(){
		if($this->input->post()){
			$this->load->view("users/coming_soon");
		}else{
			redirect("users");
		}
		// var_dump($this->input->post());
	}

	public function count(){
		// $this->session->set_userdata("times",)
		if($this->session->has_userdata("times")){
			$count = $this->session->userdata("times");
			$count = $count + 1;
			$this->session->set_userdata("times",$count);
		}else{
			$count = 1;
			$this->session->set_userdata("times",$count);
		}
		$data['count'] = $count;
		$this->load->view("users/count",$data);
		// echo "You visited this site " . $this->session->userdata("times");
	}


	public function reset(){
		$this->session->sess_destroy();
		redirect("users/count");

	}
}
