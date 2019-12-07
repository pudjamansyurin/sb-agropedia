<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function getAllIklan($condition = NULL, $start = 0, $limit = 10){
		$this->db->select('*');
		$this->db->from('iklan');
		if($condition)
			$this->db->where($condition['param'], $condition['value']);
		$this->db->join('user', 'user.id_user = iklan.id_user');
		$this->db->join('kategori_sub', 'kategori_sub.id_kategori_sub = iklan.id_kategori_sub');
		$this->db->join('kategori', 'kategori.id_kategori = kategori_sub.id_parent');
		$this->db->join('iklan_satuan', 'iklan_satuan.id_satuan = iklan.id_satuan');
		$this->db->join('iklan_status', 'iklan_status.id_iklan_status = iklan.id_iklan_status');
		$this->db->order_by('id_iklan', 'DESC');
		$this->db->limit($limit, $start); 
		$data = $this->db->get()->result();
		return $data;
	}
	function getIklan($id_iklan){
		$this->db->select('*');
		$this->db->from('iklan');
		$this->db->where('id_iklan', $id_iklan);
		$this->db->join('user', 'user.id_user = iklan.id_user');
		$this->db->join('kategori_sub', 'kategori_sub.id_kategori_sub = iklan.id_kategori_sub');
		$this->db->join('kategori', 'kategori.id_kategori = kategori_sub.id_parent');
		$this->db->join('iklan_satuan', 'iklan_satuan.id_satuan = iklan.id_satuan');
		$this->db->join('iklan_status', 'iklan_status.id_iklan_status = iklan.id_iklan_status');
		$data = $this->db->get()->result();
		return $data[0];
	}
	function getDefaultIklanPhoto($id_iklan){
		$this->db->select('*');
		$this->db->from('iklan_photo');
		$this->db->where('id_iklan', $id_iklan);
		$this->db->limit(1); 
		$data = $this->db->get()->result();
		return $data[0];
	}
	function getIklanPhoto($id_iklan){
		$this->db->select('*');
		$this->db->from('iklan_photo');
		$this->db->where('id_iklan', $id_iklan);
		$data = $this->db->get()->result();
		return $data;
	}
	function getKategori($id_kategori){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		$data = $this->db->get()->result();
		return $data[0];
	}
	function getAllKategori(){
		$data = $this->db->get('kategori')->result();
		return $data;
	}
	function getAllSubKategori($id_parent){
		$this->db->select('*');
		$this->db->from('kategori_sub');
		$this->db->where('id_parent', $id_parent);
		$data = $this->db->get()->result();
		return $data;
	}
	function getAllFAQ(){
		$data = $this->db->get('faq')->result();
		return $data;
	}
	// sistem parameter
	function getSistemConfig(){
		$this->db->select('sistem_config, value');
		$data = $this->db->get('sistem_config')->result();
		return $data;
	}
	function getAllThemes(){
		$data = $this->db->get('sistem_themes')->result();
		return $data;
	}
	function updateSistemConfig($sistem_config, $value){
		$this->db->where('sistem_config', $sistem_config);
		return $this->db->update('sistem_config', array('value ' => $value));
	}	
}
?>