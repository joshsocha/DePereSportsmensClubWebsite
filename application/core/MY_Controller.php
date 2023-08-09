<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

  protected $data = array();

  function __construct() {
    parent::__construct();
    if(!isset($this->data['page'])){$this->data['page'] = "";}
    if(!isset($this->data['subpage'])){$this->data['subpage'] = "";}
    if(!isset($this->data['banner'])){$this->data["banner"] = "DefaultBanner.jpg";}

    // Board members and volunteers
    $this->data["president"] = "Scott Harris";
    $this->data["presidentPhone"] = "920.819.4349";
    $this->data["vicePresident"] = "Josh Landwehr";
    $this->data["vicePresidentPhone"] = "920.530.0700";
    $this->data["secretary"] = "Becky Schuessler";
    $this->data["secretaryPhone"] = "920.217.0923";
    $this->data["treasurer"] = "Beth Sommerfeld";
    $this->data["treasurerPhone"] = "920.621.7606";
    $this->data["eventCoordinator"] = "Nicole Socha";
    $this->data["eventCoordinatorPhone"] = "920.680.7953";
    $this->data["juniorRifle1"] = "Jason Knight";
    $this->data["juniorRiflePhone1"] = "920.562.0136";
    $this->data["juniorRifle2"] = "Dennis Dugre";
    $this->data["juniorRiflePhone2"] = "920.494.9227";
    $this->data["archery"] = "Jim Sausen";
    $this->data["archeryPhone"] = "920.819.6616";
    $this->data["websiteAdmin"] = "Joshua Socha";
    $this->data["websiteAdminPhone"] = "920.680.7962";
    $this->data["rifle"] = "Joe Socha";
    $this->data["rifleEmail"] = "riflerange@deperesportsmensclub.com";
    $this->data["pistol"] = "Mark Brienen";
    $this->data["pistolPhone"] = "920.469.1815";
    $this->data["actionPistol1"] = "Joe Kummerer";
    $this->data["actionPistolPhone1"] = "920.619.3933";
    $this->data["actionPistolEmail1"] = "bayman48@new.rr.com";
    $this->data["actionPistol2"] = "Brian Cisler";
    $this->data["actionPistolPhone2"] = "920.366.2433";
    $this->data["actionPistolEmail2"] = "briancisler@gmail.com";
    $this->data["actionRifle1"] = "Joe Kummerer";
    $this->data["actionRiflePhone1"] = "920.619.3933";
    $this->data["actionRifle2"] = "RJ Elsing";
    $this->data["actionRiflePhone2"] = "920.680.7263";
    $this->data["indoorPistol"] = "Mark Brienen";
    $this->data["indoorPistolPhone"] = "920.469.1815";
    $this->data["trap1"] = "Brett Junio";
    $this->data["trapPhone1"] = "920.680.4594";
    $this->data["trap2"] = "Adam Prokash";
    $this->data["trapPhone2"] = "920.606.9641";
    $this->data["fourH"] = "Amy Leiterman";
    $this->data["fourHPhone"] = "920.680.4446";
    $this->data["grounds"] = "Paul Forstner";
    $this->data["groundsPhone"] = "920.336.4498";
    $this->data["memberAtLarge1"] = "Bill Lund";
    $this->data["memberAtLargePhone1"] = "920-337-6420";
    $this->data["memberAtLarge2"] = "Bill Van Camp";
    $this->data["memberAtLargePhone2"] = "920-619-9458";
    $this->data["memberAtLarge3"] = "Dennis Cavil";
    $this->data["memberAtLargePhone3"] = "920.680.7429";
    $this->data["memberAtLarge4"] = "Dan Minten";
    $this->data["memberAtLargePhone4"] = "920.309.0645";

    $this->load->helper('url');
  }

  function render_page($view) {
    $this->load->view('templates/header', $this->data);
    $this->load->view($view, $this->data);
    $this->load->view('templates/footer', $this->data);
  }

}
?>