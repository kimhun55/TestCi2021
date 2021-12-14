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
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function index1()
	{
	echo 555;
	}

    public function bass(){
        echo "dfsdfsd";
        echo "bass";
        echo "dddd";

    }
	public function blackeye()
	{
		$this->load->view('welcome_message');
	}
	public function blackeye2()
	{
		$this->load->view('welcome_message');
	}


    public function form(){
        $this->load->view('form_upload');

    }
    public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['file_name'] = 'bass'.date('YmdHis');
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileupload'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error);

                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        //var_dump($data);

                        echo $data['upload_data']['file_name'];
                        $insert = array('name' => $data['upload_data']['file_name']);
                        $this->db->insert('file',$insert);

                        // $this->load->view('upload_success', $data);

                }
        }

    public function kkkk()
    {
        $this->load->view('welcome_message');
    }

}
