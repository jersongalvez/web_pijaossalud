<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	
	public function index()
	{
		$this->load->view('inicio');
	}

	public function quienesSomos() {
		$this->load->view("quienes_somos");
	}

	public function estadosFinancieros() {
		$this->load->view("estados_financieros");
	}

	public function circulares() {
		$this->load->view("circulares");
	}

	public function contratacion() {
		$this->load->view("contratacion");
	}
}
