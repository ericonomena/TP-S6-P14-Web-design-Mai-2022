<?php
if(! defined('BASEPATH')) exit('no direct script acces allowed');
class dbconnect extends CI_Model{
    public function get_info(){
        return array('auteur'=>'Chuck Norris',
                    'date'=>'24/07/05',
                    'email'=>'email@gmail.com');  
    }
    public function get_client(){
        $query=$this->db->query('SELECT *FROM customer');
        return $query;
    }
    public function get_detail_client($id){
        $req=('SELECT *FROM customer where customer_id=%s');
        $req=sprintf($req,$id);
        $query=$this->db->query($req); 
        $row=$query->row_array();
        return $row;
    }
    public function Recherche($val){
        $req="SELECT * FROM customer where last_name LIKE '%s' ";
        $vali='%'.$val.'%';
        sprintf($req,$vali);
        echo $req;
        $query=$this->db->query($req); 
        return $query;
    }
    public function int()
    {
        return 3;
    }
    public function verf(){
        $req="select*from salaire";
        $query=$this->db->query($req); 
        foreach ($query->result_array() as $key) {
            echo $key['salaire'];
        }
    }
}
?>