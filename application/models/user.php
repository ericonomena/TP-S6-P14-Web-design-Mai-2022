<?php
if(! defined('BASEPATH')) exit('no direct script acces allowed');
class user extends CI_Model{

    public  function getNextSequence($sc){
    $sql="select nextval('%s')";
    $sql=sprintf($sql,$sc);
    $query=$this->db->query($sql);
    $row=$query->row_array();
    return $row['nextval'];
}
public function insert($nom,$prenom,$email,$dtn,$password){
    $sc=$this->getNextSequence("s_users");
    $sql="insert into users values('%s','%s','%s','%s','%s','%s')";
    $sql=sprintf($sql,$sc,$nom,$prenom,$email,$dtn,$password);
    $this->db->query($sql);
}

public function list(){
    $query=$this->db->query("select * from users");
    return $query->result_array();
}

public function getbyid($id){
    $query=$this->db->query("select * from users where id=$id");
    return $query->row_array();

}
public function update($idBeneficiaire,$nom,$role){
        $sql="update user set role='%s',nom='%s' where iduser=%d";
        $sql=sprintf($sql,$role,$nom,$idBeneficiaire);
        $this->db->query($sql);
}


}
?>