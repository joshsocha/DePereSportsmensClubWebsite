<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventsAndNews extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['page'] = "eventsandnews";
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
		$this->data['title'] = "Event and News";
		$this->data['subpage'] = "eventsandnews";
		$this->render_page('pages/EventsAndNews/Index');
	}

	public function Newsletter()
	{
		$this->data['title'] = "Newsletter";
		$this->data['subpage'] = "newsletter";
		$this->render_page('pages/EventsAndNews/Newsletter');
	}

	public function Winterfest()
	{
		$this->data['title'] = "Winterfest";
		$this->data['subpage'] = "winterfest";
		$this->data["banner"] = "WinterfestBanner.jpg";
		$this->render_page('pages/EventsAndNews/Winterfest');
	}

	public function SportsmensRaffle()
	{
		$this->data['title'] = "Sportsmen's Raffle";
		$this->data['subpage'] = "sportsmensraffle";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/EventsAndNews/SportsmensRaffle');
	}

	public function CancerResearchBenefit()
	{
		$this->data['title'] = "Cancer Research Benefit";
		$this->data['subpage'] = "cancerresearchbenefit";
		$this->data["banner"] = "CancerBenefitBanner.jpg";
		$this->render_page('pages/EventsAndNews/CancerResearchBenefit');
	}

	// Leagues/3DArchery is rerouted here since you cannot start
	// your functions with a number
	public function TwentyGunRaffle()
	{
		$this->data['title'] = "20-Gun Raffle";
		$this->data['subpage'] = "20gunraffle";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/EventsAndNews/20GunRaffle');
	}

	public function SummerRaffle()
	{
		$this->data['title'] = '$ummer Raffle';
		$this->data['subpage'] = "summerraffle";
		$this->data["banner"] = "RifleRangeBanner.jpg";
		$this->render_page('pages/EventsAndNews/SummerRaffle');
	}

	public function SightInDays()
	{
		$this->data['title'] = "Sight-in Days";
		$this->data['subpage'] = "sightindays";
		$this->data["banner"] = "SightInDaysBanner.jpg";
		$this->render_page('pages/EventsAndNews/SightInDays');
	}

	public function HuntersSafety()
	{
		$this->data['title'] = "Hunter's Safety";
		$this->data['subpage'] = "hunterssafety";
		$this->data["banner"] = "SightInDaysBanner.jpg";
		$this->render_page('pages/EventsAndNews/HuntersSafety');
	}
}
