<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	//use application\model\Models;
class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
	}

    public function index(){
        $this->load->library('migration');
        if ($this->migration->current() == FALSE){
            show_error($this->migration->error_string());
        }
    }


}