<?php
namespace Home\Controller;
use Think\Controller;
// require_once 'Library/Controller.class.php';
Class BlogController extends Controller {

	/*Public function __construct() {
		parent::__construct();
	}*/

	Public function _initialize() {
		P('_initialize');
	}

	Public function _before_index() {
		P('before index');
	}

	Public function _after_index() {
		P('after index');
	}

	Public function index() {
		$this->cates = $this->category();
		$where = array(
			'status' => 0,
			'id' => I('id',0,'intval')
			);
		$rest = M('blog')->fields(array('title','id'))->where($where)->limit(1)->fetchSql(false)->select();
		$this->rest =$rest;
		$this->display();
	}

	Public function page_blog() {
		$where = array(
			'status' => 0,
			'id' => I('id',0,'intval')
			);
		$rest = M('blog')->fields(array('title','id'))->where($where)->limit(5)->order('created')->fetchSql(false)->select();
		$this->rest =$rest;
		// P($rest);
		$this->display('');
	}

	Public function category() {
		$where = array(
			'status' => 0,
			'pid' => 0
			);
		$fields = array('id','title','pid','level');
		$rest = M('category')->fields($fields)->where($where)->fetchSql(false)->order('sort')->select();
		// P($rest);die;
		return $rest;

	}

	Public function edit() {
		// P(I());
		$this->rest = M('blog')->where('id='.I('id',0,'intval'))->fetchSql(false)->find();
		// P($this->rest);
		$this->display();
	}

}