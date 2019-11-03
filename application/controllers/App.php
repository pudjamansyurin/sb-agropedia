<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// load the model
		$this->load->model('App_model');
		// detect device
		$this->mobile = $this->agent->is_mobile();
		// common configuration
		$this->form_validation->set_error_delimiters('', '<br/>');
		// get global configuration
		$sistem_config = $this->App_model->getSistemConfig();
		foreach($sistem_config as $value)
			$this->sistem->{$value->sistem_config} = $value->value;
	}	
	public function index(){
		if(isNotHTTPS()) redirect('app');
		$this->load->view('intro', $data);
	}
	public function home($param = NULL, $value = NULL){		
		if($param && $value){
			$params = array('kategori','kategori_sub');
			if(!in_array($param, $params)){
				if(empty($value) || !is_numeric($value)){
					// hacking detected
				}
			}
			// if success will pass
			$condition = array('param' => "{$param}.id_{$param}", 'value' => $value);
		}
		$all_iklan = $this->App_model->getAllIklan($condition);
		foreach($all_iklan as $iklan){
			$iklan->harga = toMoney($iklan->harga);
			$iklan->default_photo = $this->App_model->getDefaultIklanPhoto($iklan->id_iklan)->iklan_photo;
			$day_diff = dayDiff($iklan->tgl_panen);
			$iklan->stock = "Tersedia";
			if($day_diff >= 0)
				$iklan->stock = "{$day_diff} hari lagi";
		}
		$data['all_iklan'] = $all_iklan;
		$this->load->view('home', $data);
	}
	public function iklan($id_iklan){
		//		if(empty($id_iklan) || !is_numeric($id_iklan))

		$iklan = $this->App_model->getIklan($id_iklan);
		$iklan->harga = toMoney($iklan->harga);
		$iklan->photo = $this->App_model->getIklanPhoto($iklan->id_iklan);
		$iklan->tgl_posting = (-1 * dayDiff($iklan->tgl_posting)).' hari lalu';
		$day_diff = dayDiff($iklan->tgl_panen);
		$iklan->stock = "Tersedia";
		if($day_diff >= 0)
			$iklan->stock = "{$day_diff} hari lagi";		
		if(empty($iklan->photo_profil) || !file_exists('./photo_profil/'.$iklan->photo_profil))
			$iklan->photo_profil = 'unknown.png';
		$iklan->created_on = nice_date($iklan->created_on, 'd M Y');

		$data['iklan'] = $iklan;
		$this->load->view('iklan', $data);
	}
	public function iklan_gallery($id_iklan){
		//		if(empty($id_iklan) || !is_numeric($id_iklan))

		$iklan = $this->App_model->getIklan($id_iklan);
		$photos = $this->App_model->getIklanPhoto($iklan->id_iklan);
		$data['photos'] = $photos;
		$this->load->view('iklan_gallery', $data);
	}
	public function iklan_lainnya($id_user){
		//		if(empty($id_user) || !is_numeric($id_user))

		$condition = array('param' => 'user.id_user', 'value' => $id_user);
		$all_iklan = $this->App_model->getAllIklan($condition);
		foreach($all_iklan as $iklan){
			$iklan->harga = toMoney($iklan->harga);
			$iklan->default_photo = $this->App_model->getDefaultIklanPhoto($iklan->id_iklan)->iklan_photo;
			$day_diff = dayDiff($iklan->tgl_panen);
			$iklan->stock = "Tersedia";
			if($day_diff >= 0)
				$iklan->stock = "{$day_diff} hari lagi";
		}

		$data['all_iklan'] = $all_iklan;
		$this->load->view('iklan_lainnya', $data);
	}
	public function iklan_saya(){
		$id_user = 1;
		$condition = array('param' => 'user.id_user', 'value' => $id_user);
		$all_iklan = $this->App_model->getAllIklan($condition);
		foreach($all_iklan as $iklan){
			$iklan->harga = toMoney($iklan->harga);
			$iklan->tgl_posting = (-1 * dayDiff($iklan->tgl_posting)).' hari lalu';
			$iklan->default_photo = $this->App_model->getDefaultIklanPhoto($iklan->id_iklan)->iklan_photo;
			$day_diff = dayDiff($iklan->tgl_panen);
			$iklan->stock = "Tersedia";
			if($day_diff >= 0)
				$iklan->stock = "{$day_diff} hari lagi";
		}
		$data['all_iklan'] = $all_iklan;
		$this->load->view('iklan_saya', $data);
	}
	public function kategori($id_parent = NULL){
		if(!$id_parent){
			$data['all_kategori'] = $this->App_model->getAllKategori();
			$this->load->view('kategori', $data);
		} else {
			//		if(!is_numeric($id_parent))
			$data['all_sub_kategori'] = $this->App_model->getAllSubKategori($id_parent);
			$data['kategori'] = $this->App_model->getKategori($id_parent);
			$this->load->view('kategori_sub', $data);
		}
	}
	public function profil_saya(){
		$this->load->view('profil_saya', $data);
	}
	public function faq(){
		$data['faqs'] = $this->App_model->getAllFAQ();
		$this->load->view('faq', $data);
	}
	public function policy(){
		$data['policy'] = $this->sistem->privacy_policy;
		$this->load->view('policy', $data);
	}
}