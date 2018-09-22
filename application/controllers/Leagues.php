<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leagues extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['page'] = "leagues";
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
		$this->data['title'] = "Leagues";
		$this->data['subpage'] = "leagues";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/Leagues/Index');
	}

	// Leagues/3DArchery is rerouted here since you cannot start
	// your functions with a number
	public function Archery()
	{
		$this->data['title'] = "3D Archery";
		$this->data['subpage'] = "3darchery";
		$this->data["banner"] = "3DArcheryBanner.jpg";
		$this->render_page('pages/Leagues/3DArchery');
	}

	// Leagues/4H is rerouted here since you cannot start
	// your functions with a number
	public function FourH()
	{
		$this->data['title'] = "4H Shooting";
		$this->data['subpage'] = "4h";
		$this->render_page('pages/Leagues/4H');
	}

	public function ActionPistol()
	{
		$this->data['title'] = "Action Pistol";
		$this->data['subpage'] = "actionpistol";
		$this->data["banner"] = "ActionPistolBanner.jpg";
		$this->render_page('pages/Leagues/ActionPistol');
	}

	public function ActionPistolParticipantInfo()
	{
		$this->data['title'] = "Action Pistol Participant Info";
		$this->data['subpage'] = "actionpistolparticipantinfo";
		$this->data['page'] = "";
		$this->data["banner"] = "ActionPistolBanner.jpg";
		$this->render_page('pages/Leagues/ActionPistolParticipantInfo');
	}

	public function ActionRifle()
	{
		$this->data['title'] = "Action Rifle";
		$this->data['subpage'] = "actionrifle";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/Leagues/ActionRifle');
	}

	public function JuniorRifle()
	{
		$this->data['title'] = "Junior Rifle";
		$this->data['subpage'] = "juniorrifle";
		$this->render_page('pages/Leagues/JuniorRifle');
	}

	public function Pistol()
	{
		$this->data['title'] = "Pistol";
		$this->data['subpage'] = "pistol";
		$this->data["banner"] = "IndoorRangeBanner.jpg";
		$this->render_page('pages/Leagues/Pistol');
	}

	public function Trap()
	{
		$this->data['title'] = "Trap";
		$this->data['subpage'] = "trapleague";
		$this->data["banner"] = "TrapRangeBanner.jpg";
		$this->render_page('pages/Leagues/Trap');
	}
}