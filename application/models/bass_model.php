<?php 
class Bass_model extends CI_Model {
    public function get_kimhun55(){
        $query = $this->db->get('kimhun55');
        $row = $query->num_rows();
        if($row == 0){
            return false;
        }
        $category = $this->get_category();
        foreach($query->result_array() as $row){

            $row['category']['cat_name'] = $category[$row['pass']];
            $data[] = $row;
        }
        return $data;

    }

    public function get_category(){
        $query = $this->db->get('category');
        $row = $query->num_rows();
        if($row == 0){
            return false;
        }
        foreach($query->result_array() as $row){

            $data[$row['cat_id']] = $row['cat_name'];
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

    public function update(){

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'pass' => $this->input->post('pass'),
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->set($data);
        $this->db->update('kimhun55');
        return true;

    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('kimhun55');
        return true;
    }

    public function edit($id){
        $this->db->where('id',$id);
        $query = $this->db->get('kimhun55');
        $row = $query->num_rows();
        if($row == 0){
            return false;
        }
        foreach($query->result_array() as $row){
            $row['category'] = $this->get_name_category($row['pass']);
            $data = $row;
        }
        return $data;

    }
    public function get_name_category($id){
        $this->db->where('cat_id',$id);
        $query = $this->db->get('category');
        $row = $query->num_rows();
        if($row == 0){
            return false;
        }
        foreach($query->result_array() as $row){
            $data = $row;
        }
        return $data;

    }

}
?>