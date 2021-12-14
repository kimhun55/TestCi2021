<?php 
class Bass_model extends CI_Model {
    public function get_kimhun55(){
        $query = $this->db->get('kimhun55');
        $row = $query->num_rows();
        if($row == 0){
            return false;
        }
        foreach($query->result_array() as $row){
            $data[] = $row;
        }
        return $data;

    }

    public function save(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'pass' => $this->input->post('pass'),
        );

        $this->db->insert('kimhun55',$data);
        return true;

    }

}
?>