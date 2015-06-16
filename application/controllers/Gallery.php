<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['page'] = "gallery";
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
	public function ActionPistolVideos()
	{
		$this->data['title'] = "Action Pistol Videos";
		$this->data['subpage'] = "actionpistolvideos";
		$this->data["banner"] = "ActionPistolBanner.jpg";
		$this->render_page('pages/Gallery/ActionPistolVideos');
	}
}