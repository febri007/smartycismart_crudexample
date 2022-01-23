<?php

// class for core system
class M_kampung extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    // get site data
	function getdataall($limit){
		$sql =  "SELECT * FROM kampung ORDER BY id LIMIT ?, ?";
        $query =  $this->db->query($sql, $limit);
        // return $query->result_array();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return array();
        }
	}
    function getdata(){
		$sql =  "SELECT * FROM kampung";
        $query =  $this->db->query($sql);
        // return $query->result_array();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return array();
        }
	}
    function gettotaldata(){
		$fetch =  $this->db->query("SELECT COUNT(id) AS total FROM kampung")->result();
        foreach ($fetch as $dt) { return $dt->total; }
	}
    function insert_kampung($data){
        return $this->db->insert('kampung', $data);
    }
    function update_kampung($id,$data){
        $this->db->where('id', $id);
        return $this->db->update('kampung', $data);
    }
    function delete($id){
        return $this->db->delete('kampung', array('id' => $id)); 
    }
    function get_rows(){
        return $this->db->query("SELECT COUNT(name) FROM kampung");
    }
    public function printdatakampung() {
		$this->db->select(array('id', 'nama', 'jk', 'keterangan'));
		$this->db->from('kampung');
		$this->db->limit(10);  
		$query = $this->db->get();
		return $query->result_array();
	}
    public function logon($pass){
        $this->db->select(array('id', 'pass'));
		$this->db->from('lock_page');
        $this->db->where('pass',$pass);
		$query = $this->db->get();
		return $query->result();
    }
    function widget_total(){
        return $this->db->query("SELECT count(nama) AS total FROM kampung");
    }
    function widget_total_laki(){
        return $this->db->query("SELECT count(nama) AS total FROM kampung WHERE jk='l'");
    }
    function widget_total_perem(){
        return $this->db->query("SELECT count(nama) AS total FROM kampung WHERE jk='p'");
    }
}
