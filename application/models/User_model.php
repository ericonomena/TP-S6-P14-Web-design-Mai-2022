<?php
if(! defined('BASEPATH')) exit('no direct script acces allowed');
class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_users() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_user($id) {
        $query = $this->db->get_where('users', array('iduser' => $id));
        return $query->row_array();
    }

    public function create_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
        $this->db->where('idusers', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {
        $this->db->where('idusers', $id);
        return $this->db->delete('users');
    }


    public function logout() {
        // Destroy session
        $this->session->sess_destroy();
 
        // Redirect to login page
        redirect('auth/login');
    }
    public function verif($email,$password) {
    try {
        $query = "SELECT * FROM users  where email = %s and password = %s ";
        $query = sprintf($query, $this->db->escape($email), $this->db->escape($password));
        $result = $this->db->query($query);
        $array = $result->result_array();
        $rows = count($array);
        if ($rows == 1) {
            return $array[0]['idusers'];
        } else {
            return 'false';
        }
    } catch (Exception $e) {
       
    }
    }


     // $this->load->helper('url');
    // // Redirect with 404 Not Found exception
    // redirect('error_page', '500');
    // $e->getMessage();
    // echo 'Error: ' . $e->getMessage();
    // $email = $array[0]['email'];
    // $idusers = $array[0]['idusers'];
    // redirect(site_url('Welcome/home/' . $idcandidat . '/' . $e->getMessage()));
    // redirect(site_url('welcome/home/'. $idusers));
    // print_r($array);
    // echo var_dump($result);
    // redirect(site_url('Admin_Controller/Page_insertion_erreur/' . $idcandidat . '/' . $e->getMessage()));
}
