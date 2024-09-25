<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product_model extends Model {
	
    public function __construct(){
        parent:: __construct();
        $this->call->database();
    }

    public function read(){
       return $this->db->table('kdpm_users')->get_all();
    }

    public function create($kdpm_last_name, $kdpm_first_name, $kdpm_email,
    $kdpm_gender, $kdpm_address){
        $data = array(
            'kdpm_last_name' => $kdpm_last_name,
            'kdpm_first_name' => $kdpm_first_name,
            'kdpm_email' => $kdpm_email,
            'kdpm_gender' => $kdpm_gender,
            'kdpm_address' => $kdpm_address
        );

        return $this->db->table('kdpm_users')->insert($data);
    }

    public function get_one($id){
        return $this->db->table('kdpm_users')->where('id', $id)->get();
    }

    public function update($kdpm_last_name, $kdpm_first_name, $kdpm_email,
    $kdpm_gender, $kdpm_address, $id){
        $data = array(
            'kdpm_last_name' => $kdpm_last_name,
            'kdpm_first_name' => $kdpm_first_name,
            'kdpm_email' => $kdpm_email,
            'kdpm_gender' => $kdpm_gender,
            'kdpm_address' => $kdpm_address
        );

        return $this->db->table('kdpm_users')->where('id', $id)->update($data);
    }

    public function delete($id){
        return $this->db->table('kdpm_users')->where('id', $id)->delete();
    }
}
?>
