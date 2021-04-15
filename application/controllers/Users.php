<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		echo "I am User Class!";
	}

    // public function says($str="default"){

    //     $data['says'] = $str;
    //     $this->load->view("users/says",$data);
    // }

    public function says($str="default",$times=NULL){

        $data['says'] = $str;
        $data['times'] = $times;
        $this->load->view("users/says",$data);
    }

    public function mrep(){
        $view_data = array(
            "name" => "Micheal Choi",
            "age" => 40,
            "location" => "Seattle,WA",
            "hobbies" => array("Basketball","Soccer","Coding","Teaching","kdramas")
        );

        $this->load->view('users/mrep',$view_data);
    }
	
}
