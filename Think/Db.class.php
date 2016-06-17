<?php
namespace Think;
Class Db {

	public $pdo;
	private $PDOStatement;
	public $config = array();
	public $fetch = 'fetchAll';
	public $fetchSql = false;
	public $trans = false;
	public $totalRows  = 0;
	public $sql;

	Public function __construct($config) {
		// $this->config = array_merge( $this->config , $config );
		$this->config = $config;
		// P($this->config);
	}

	Public function open() {
		if( !$this->pdo ){
			$this->connect();
		}
	}

	Public function connect() {
		try{
			// P($this->config);
			$this->pdo = new \PDO($this->config['dsn'],$this->config['username'],$this->config['password']);
			// $this->pdo = new \PDO('mysql:dbname=test;host=127.0.0.1;charset=utf8','root','');
			// throw new \Exception('异常');
			return $this->pdo;
		}catch( \PDOException $e){
			echo  $e->getMessage();
		}
	}

	Public function query( $sql) {
		try{
			if( $this->trans ) {
				$this->pdo->beginTransaction();
			}
			if( $this->fetchSql ) {
				return $sql;
			}
			$this->open();
			$this->prepareStatement($sql);
			if( $this->trans ) {
				$this->pdo->commit();
			}
		}catch( \PDOException $e ) {
			$this->pdo->rollBack();
			print_r($e);
			die;
		}
		return $this->getResult();
	}

	Public function transaction($trans=false) {
		$this->trans = $trans;
		return $this;
	}

	Public function prepareStatement( $sql , $fields_value=array() ){
		// $this->open();
		if( $this->PDOStatement ){
			$this->free();
		}
		$PDOStatement = $this->pdo->prepare( $sql );
		if( !empty($fields_value) )
			$PDOStatement->execute( $fields_value );
		else
			$PDOStatement->execute();
		$this->PDOStatement = $PDOStatement;
		/*if( !$result ){
			$this->PDOStatement->error();
		}*/
		// return $this;
	}

	Private function getResult(){
		switch ($this->fetch) {
			case 'fetchObject':
			$result = $this->PDOStatement->fetchObject( \PDO::FETCH_ASSOC );
			break;
			case 'fetch':
			$result = $this->PDOStatement->fetch( \PDO::FETCH_ASSOC );
			break;
			default:
			$result = $this->PDOStatement->fetchAll( \PDO::FETCH_ASSOC );
			break;
		}
		// P($result);
		return $result;
	}

	Public function where( $where ) {
		if( is_string($where)) {
			$_where = 'where 1=1 AND '.$where;
		}
		if( is_array($where) ) {
			$_where = 'where 1=1 AND ';
			$condition = array();
			foreach ($where as $k => $v) {
				if( is_string($v) ) {
					$condition[] = "`$k`='$v'";
					continue;
				}
				$condition[] = "`$k`=$v";
			}
			$_where .= implode(' AND ', $condition);
		}
		// P($_where);
		$this->where = $_where;
		return $this;
	}

	Public function fields($fields='*') {
		$_fields = $fields;
		if( is_array($fields) ) {
			$_fields = implode('`,`', $fields);
		}
		$this->fields = '`'.$_fields.'`';
		return $this;
	}

	Public function limit($limit='') {
		$_limit = 'limit '.$limit;
		if( !$limit ) {
			$_limit = '';
		}
		$this->limit = $_limit;
		return $this;
	}

	Public function order($order) {
		if(empty($order)) {
			return '';
		}
		$this->order = 'order by '.$order;
		return $this;
	}

	Public function select() {
		$sql = $this->parseSql();
		$this->fetch = 'fetchAll';
		return $this->query($sql);
	}

	Public function count() {
		$sql = $this->parseSql();
		$sql = "select count(1) as count from ({$sql}) Z";
		$rest = $this->find($sql);
		return $rest['count'];
	}

	Public function fetchSql( $fetchSql=false) {
		$this->fetchSql = $fetchSql;
		return $this;
	}

	Public function find($sql='') {
		if( empty($sql) ) {
			$sql = $this->parseSql();
		}
		$this->fetch = 'fetch';
		return $this->query($sql);
	}

	Public function parseSql() {
		$config = $this->config;
		$config['fields'] = isset($config['fields'])?$config['fields']:'*';
		$search = array( "%FIELDS%","%TABLE%","%WHERE%","%ORDER%","%LIMIT%" );
		$replace = array( $config['fields'] , $config['table_name'],$config['where'],$config['order'],$config['limit'] );
		$sql = " SELECT %FIELDS% FROM %TABLE% %WHERE% %ORDER% %LIMIT% ";
		$sql = str_replace($search, $replace, $sql);
		// $this->sql = $sql;
		return $sql;
	}

	Public function getTotalRows($sql='') {
		if( empty($sql)) {
			$sql = preg_replace('/(limit\s+\d+)/', '', $this->sql);
		}
		$sql = "select count(1) as count from ({$sql}) Z";
		$rest = $this->find($sql);
		return $rest['count'];
	}

	Public function __set( $key , $value ){
		$this->config[$key] = $value;
	}

	Public function __get( $key ) {
		return $this->config[$key];
	}

	Private function error(){
		return $this->PDOStatement->errorInfo();
	}

	Private function free(){
		$this->PDOStatement = null;
	}

}