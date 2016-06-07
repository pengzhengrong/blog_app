<?php
namespace Home\Controller;
// require_once 'Library/Controller.class.php';
Class BlogController extends \Library\Controller {

	/*Public function __construct() {
		parent::__construct();
	}*/

	public function index() {
		// $this->display();
		P('this is blog index');
		$this->display();
	}

}