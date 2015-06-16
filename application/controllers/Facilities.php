<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facilities extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['page'] = "facilities";
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
		$this->data['title'] = "Facilities";
		$this->data['subpage'] = "facilities";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/Facilities/Index');
	}

	public function ArcheryRange3D()
	{
		$this->data['title'] = "3D Archery Range";
		$this->data['subpage'] = "3darchery";
		$this->data["banner"] = "3DArcheryBanner.jpg";
		$this->render_page('pages/Facilities/3DArcheryRange');
	}

	public function ClubHouse()
	{
		$this->data['title'] = "ClubHouse";
		$this->data['subpage'] = "clubhouse";
		$this->data["banner"] = "ClubHouseBanner.jpg";
		$this->render_page('pages/Facilities/ClubHouse');
	}

	public function IndoorRange()
	{
		$this->data['title'] = "Indoor Range";
		$this->data['subpage'] = "indoorrange";
		$this->data["banner"] = "IndoorRangeBanner.jpg";
		$this->render_page('pages/Facilities/IndoorRange');
	}

	public function NaturePreserve()
	{
		$this->data['title'] = "Nature Preserve";
		$this->data['subpage'] = "naturepreserve";
		$this->data["banner"] = "NaturePreserveBanner.jpg";
		$this->render_page('pages/Facilities/NaturePreserve');
	}

	public function RifleRange()
	{
		$this->data['title'] = "Rifle Range";
		$this->data['subpage'] = "riflerange";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/Facilities/RifleRange');
	}

	public function Trap()
	{
		$this->data['title'] = "Trap";
		$this->data['subpage'] = "traprange";
		$this->data["banner"] = "TrapRangeBanner.jpg";
		$this->render_page('pages/Facilities/Trap');
	}
}
