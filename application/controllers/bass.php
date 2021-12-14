<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bass extends CI_Controller {

   
    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->name = 'Test'; // data main
    }
	public function index()
	{
        
       
        $data['name'] = "bass"; //main -> data
        $data['data'] = array(1,2,3,4);
		$this->load->view('bass_view',$data);
        // view path view/
       
	}
    public function detail(){
        echo $this->name;
    }
}
