<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['page'] = "aboutus";
   	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['title'] = "About Us";
		$this->data['subpage'] = "aboutus";
		$this->render_page('pages/AboutUs/Index');
	}

	public function BoardMembers()
	{
		$this->data['title'] = "Baord Members";
		$this->data['subpage'] = "boardmembers";
		$this->render_page('pages/AboutUs/BoardMembers');
	}

	public function RecommendedSites()
	{
		$this->data['title'] = "Recommended Sites";
		$this->data['subpage'] = "recommendedsites";
		$this->render_page('pages/AboutUs/RecommendedSites');
	}
}