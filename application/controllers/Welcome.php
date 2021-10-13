<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
	public function Website_and_Software_Development()
	{
		$this->load->view('web-software');
	}
	public function Recruitment_and_Staffing()
	{
		$this->load->view('Recruitment-Staffing');
	}
	public function Digital_Marketing()
	{
		$this->load->view('Digital-marketing');
	}
	public function SEO_and_Content_Writer()
	{
		$this->load->view('seo');
	}
	public function aboutus()
	{
		$this->load->view('about-us');
	}
	public function contactus()
	{
		$this->load->view('contact-us');
	}
	public function email_process()
	{
		$this->load->view('email_process');
	}
	
}