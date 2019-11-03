<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function setLastActivity($id_user){
		$this->db->set('last_activity', date("Y-m-d H:i:s"));
		$this->db->where('id_user', $id_user);
		$this->db->update('user');
	}
	function setLastLogin($id_user){
		$this->db->set('last_login', date("Y-m-d H:i:s"));
		$this->db->where('id_user', $id_user);
		$this->db->update('user');
	}
	function getUser($username){
		$username = $this->db->escape_str($username);
		$data = $this->db->query("SELECT user.*, role.role, role.role_desc, tingkat.tingkat, daerah.daerah, desa.desa, kelompok.kelompok FROM user, role, tingkat, daerah, desa, kelompok WHERE user.id_role = role.id_role AND user.id_tingkat = tingkat.id_tingkat AND user.id_daerah = daerah.id_daerah AND user.id_desa = desa.id_desa AND user.id_kelompok = kelompok.id_kelompok AND user.username = '{$username}'")->result();
		return $data[0];
	}
	function getUserById($id_user){
		$id_user = $this->db->escape_str($id_user);
		$data = $this->db->query("SELECT user.*, role.role, role.role_desc, tingkat.tingkat, daerah.daerah, desa.desa, kelompok.kelompok FROM user, role, tingkat, daerah, desa, kelompok WHERE user.id_role = role.id_role AND user.id_tingkat = tingkat.id_tingkat AND user.id_daerah = daerah.id_daerah AND user.id_desa = desa.id_desa AND user.id_kelompok = kelompok.id_kelompok AND user.id_user = {$id_user}")->result();
		return $data[0];
	}
	function getUserByEmail($email){
		$email = $this->db->escape_str($email);
		$data = $this->db->query("SELECT user.*, role.role, role.role_desc, tingkat.tingkat, daerah.daerah, desa.desa, kelompok.kelompok FROM user, role, tingkat, daerah, desa, kelompok WHERE user.id_role = role.id_role AND user.id_tingkat = tingkat.id_tingkat AND user.id_daerah = daerah.id_daerah AND user.id_desa = desa.id_desa AND user.id_kelompok = kelompok.id_kelompok AND user.email = '{$email}'")->result();
		return $data[0];
	}
	function update($id_user, $data){
		$this->db->where('id_user', $id_user);
		$this->db->update('user', $data);
	}	
	function isEmailRegisteredToOtherUser($email, $id_user){
		$email = $this->db->escape_str($email);
		$id_user = $this->db->escape_str($id_user);
		$data = $this->db->query("SELECT email FROM user WHERE email = '{$email}' AND id_user <> {$id_user}")->result();
		return $data[0];
	}
	function isEmailRegistered($email){
		$email = $this->db->escape_str($email);
		$data = $this->db->query("SELECT email FROM user WHERE email = '{$email}'")->result();
		return $data[0];
	}
	function getDaerah(){
	 	$data = $this->db->query("SELECT * FROM daerah WHERE id_daerah = 1")->result();
	 	return $data[0];
	}
}
?>