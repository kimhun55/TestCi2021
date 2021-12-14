<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bass extends CI_Controller {

   
    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->name = 'Test'; // data main

            $this->load->model('bass_model','bass');
    }
	public function index()
	{
        
       
        $data['name'] = "bass"; //main -> data
        $data['data'] = $this->bass->get_kimhun55();
        //select * From kimhun55
        //foreach(data as val ){ data[] = val}
        echo "<pre>";
        var_dump( $data['data']);
		$this->load->view('bass_view',$data);
        // view path view/
       
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
