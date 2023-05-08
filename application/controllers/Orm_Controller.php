<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ORM_Controller extends CI_Controller {

    public function get_all($table) {
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function get_byId($id,$table) {
        $query = $this->db->get_where($table, array('id' => $id));
        return $query->row_array();
    }



    public function get_byIdType($id,$table) {
        $query = $this->db->get_where($table, array('idtype' => $id));
        return $query->result_array();
    }

    public function create($data,$table) {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data,$table) {
        $this->db->where('id'+$table, $id);
        return $this->db->update($table, $data);
    }

    public function delete($id) {
        $this->db->where('id'+$table, $id);
        return $this->db->delete($table);
    }


    public function column_name($table) {
        try {
            $query = "SELECT column_name FROM information_schema.columns WHERE table_name = '%s' ";
            $query = sprintf($query, $table);
            $result = $this->db->query($query);
            $array = $result->result_array();
            $rows = count($array);
           
        } catch (Exception $e) {
			// TODO: handle exception
			$e->printStackTrace();
		}
        return $array;
        }

    public function number_column($table) {
        try {
            $query = "SELECT column_name FROM information_schema.columns WHERE table_name = '%s' ";
            $query = sprintf($query, $table);
            $result = $this->db->query($query);
            $array = $result->result_array();
            $rows = count($array);
           
        } catch (Exception $e) {
			// TODO: handle exception
			$e->printStackTrace();
		}
        return $rows;
        }

    // select column_name from information_schema.columns WHERE table_name = 'client';

}
