<?php
namespace Think;
Class Db {

	public $pdo;
	private $PDOStatement;
	public $config = array();

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

	Public function query( $sql , $fetchSql=false ) {
		if( $fetchSql ) {
			return $sql;
		}
		$this->open();
		$this->prepareStatement($sql);
		return $this->getResult();
	}

	Public function where( $where ) {
		if( is_string($where)) {
			$_where = 'where 1=1 AND '.$where;
		}
		if( is_array($where) ) {
			$_where = 'where 1=1 AND ';
			foreach ($where as $k => $v) {
				$condition = array();
				if( is_string($v) ) {
					$condition[] = "`$k`='$v'";
					continue;
				}
				$condition[] = "`$k`=$v";
			}
			$_where .= implode(' AND ', $condition);
		}
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

	Public function limit($limit=0) {
		$_limit = 'limit '.$limit;
		if( !$limit ) {
			$_limit = '';
		}
		$this->limit = $_limit;
		return $this;
	}

	Public function select($fetchSql=false) {
		$sql = $this->parseSql();
		return $this->query($sql,$fetchSql);
	}

	Public function parseSql() {
		$config = $this->config;
		$search = array( "%FIELDS%","%TABLE%","%WHERE%","%LIMIT%" );
		$replace = array( $config['fields'] , $config['table_name'],$config['where'],$config['limit'] );
		$sql = " SELECT %FIELDS% FROM %TABLE% %WHERE% %LIMIT% ";
		$sql = str_replace($search, $replace, $sql);
		return $sql;
	}

	Public function prepareStatement( $sql , $fields_value=array() ){
		// $this->open();
		/*if( $this->PDOStatement ){
			$this->free();
		}*/
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
		$result = $this->PDOStatement->fetchAll( \PDO::FETCH_ASSOC );
		return $result;
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