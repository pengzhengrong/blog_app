<?php

namespace Home\Controller;
use Think\Controller;

Class IndexController extends Controller {

	Public function index() {
		$this->display('index');
	}

	Public function page_blog() {
		$where = array(
			'status' => 0,
			);
		$fields = array('title','content','id','created');
		$totalRows = M('blog')->where($where)->count();

		$pageSize = C('PAGE_SIZE');
		$page = new \Think\Page($totalRows , $pageSize);
		$limit = $page->firstRow.','.$pageSize;
		// $limit = '5';
		// P($limit); die;
		$rest = M('blog')->fields($fields)->where($where)->limit($limit)->order('created desc')->fetchSql(false)->select();
		$this->show = $page->show();
		$this->rest = $rest;
		// P($rest); die;
		$this->display('page_blog');
	}

}