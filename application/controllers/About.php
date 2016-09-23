<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

	/**
	 * Gallery Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/welcome/about
	 */
	public function index()
	{
		$this->load->view('about'); 
	}
}
