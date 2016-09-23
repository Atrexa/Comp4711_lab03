<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application
{

	/**
	 * Gallery Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/welcome/gallery
	 */
	public function index()
	{
		$this->load->view('gallery');
	}
}
