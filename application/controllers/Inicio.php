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

	public function contactanos() {
		$this->load->view("contactanos");
	}

	public function incapacidades() {
		$this->load->view("incapacidades");
	}

	public function subsidiado() {
		$this->load->view("subsidiado");
	}

	public function contributivo() {
		$this->load->view("contributivo");
	}

	public function transparencia() {
		$this->load->view("transparencia");
	}

	public function cuentas() {
		$this->load->view("rendicion_cuentas");
	}

	public function preguntas() {
		$this->load->view("preguntas");
	}
}
