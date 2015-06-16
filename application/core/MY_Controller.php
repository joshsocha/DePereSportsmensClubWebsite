<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

  protected $data = array();

  function __construct() {
    parent::__construct();
    if(!isset($this->data['page'])){$this->data['page'] = "";}
    if(!isset($this->data['subpage'])){$this->data['subpage'] = "";}
    if(!isset($this->data['banner'])){$this->data["banner"] = "DefaultBanner.jpg";}
    $this->load->helper('url');
  }

  function render_page($view) {
    $this->load->view('templates/header', $this->data);
    $this->load->view($view, $this->data);
    $this->load->view('templates/footer', $this->data);
  }

}
?>