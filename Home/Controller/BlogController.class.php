<?php
namespace Home\Controller;
// require_once 'Library/Controller.class.php';
Class BlogController extends \Think\Controller {

	/*Public function __construct() {
		parent::__construct();
	}*/

	public function index() {
		$rest = M('blog')->fields(array('title','id'))->where('status=0')->limit('3')->select(false);
		$this->rest =$rest;
		$this->display();
	}

}