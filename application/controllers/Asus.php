<?php

class Asus extends CI_Controller {
	public function index() {
		$data["produk"] = $this->Produk_model->tampil_produk("Asus")->result();

		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("pages/asus_view", $data);
		$this->load->view("templates/footer");
	}

	public function tambah_keranjang($id) {
		$produk = $this->Produk_model->find($id);

		$data = [
			"id"=>$produk->produk_id, 
			"qty"=>1, 
			"price"=>$produk->produk_harga, 
			"name"=>$produk->produk_nama
		];

		$this->cart->insert($data);
		redirect("Asus");
	}
}
