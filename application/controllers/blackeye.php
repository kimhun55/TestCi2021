<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blackeye extends CI_Controller { //การตั้งชื่อ class ต้องตั้งชื่อตัวใหญ่

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
    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->name = 'Test'; // data main

            $this->load->model('bass_model','bass');
    }
	public function index()
	{
		// $this->load->view('welcome_message');
        echo "BlackEye";
	}
    public function add(){
        $this->load->view('bass_add_view');
    }

    public function save(){
       // var_dump($_POST);
        //$this->input->post('xxx') check scipt
        $this->bass->save();

        //$this->index();
        redirect('bass');

    }
    public function detail(){
        echo $this->name;
    }
}
