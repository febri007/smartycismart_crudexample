<?php

// class for core system
class M_belajar extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    // get site data
	function getdata(){
		return $this->db->get("pendataan");
	}
    function insert_penduduk($data){
        return $this->db->insert('pendataan', $data);
    }
    function update($sebelum,$data){
        $this->db->where('name', $sebelum);
        return $this->db->update('pendataan', $data);
    }
    function delete($name){
        return $this->db->delete('pendataan', array('name' => $name)); 
    }
    function get_rows(){
        return $this->db->query("SELECT COUNT(name) FROM pendataan");
    }
}
