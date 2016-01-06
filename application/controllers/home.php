<?php 
class Home extends CI_Controller
{
	function index(){
	{
		$this->load->view('home/v_home');
	}
	function kost($mawar='mawar')
	{
		$this->load->view('home/det_kostan');
	}
	function pesan()
	{
		$this->load->view('home/pesan');	
	}
	function kontak()
	{
		$this->load->view('home/contact');	
	}
}
?>