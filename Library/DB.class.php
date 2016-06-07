<?php
namespace Library;
Class DB {

	public $pdo;
	private $PDOStatement;
	public $config = array(
		'type'              =>  '',     // 数据库类型
		'hostname'          =>  '127.0.0.1', // 服务器地址
		'database'          =>  '',          // 数据库名
		'username'          =>  '',      // 用户名
		'password'          =>  '',          // 密码
		'hostport'          =>  '',        // 端口
		'dsn'               =>  '', //
		'params'            =>  array(), // 数据库连接参数
		'charset'           =>  'utf8',      // 数据库编码默认采用utf8
		'prefix'            =>  '',    // 数据库表前缀
		'debug'             =>  false, // 数据库调试模式
		'deploy'            =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
		'rw_separate'       =>  false,       // 数据库读写是否分离 主从式有效
		'master_num'        =>  1, // 读写分离后 主服务器数量
		'slave_no'          =>  '', // 指定从服务器序号
		'db_like_fields'    =>  '',
        );

	Public function __construct( $config ) {
		$this->config = array_merge( $this->config , $config );
	}

	Public function open() {
		if( $this->pdo )
			return $this->pdo;
		else
			return $this->connect();
	}

	Public function connect() {
		try{
			$this->pdo = new PDO($this->config('dsn'),$this->config('username'),$this->config('password'));
			return $this->pdo;
		}catch( \PDOException $e){
			return $e->getMessage();
		}
	}

	Public function query( $sql , $params ){
		$this->open();
		$this->prepareStatement($sql , $params);
		return $this->getResult();
	}

	Public function prepareStatement( $sql , $fields_value=array() ){
		$this->open();
		if( !$this->PDOStatement ){
			$this->free();
		}
		$PDOStatement = $this->pdo->prepare( $sql );
		$PDOStatement->execute( $fields_value );
		$result = $this->PDOStatement = $PDOStatement;
		if( !$result ){
			$this->PDOStatement->error();
		}
		return $this->PDOStatement
	}

	Private function getResult(){
		$result = $this->PDOStatement->fetchAll( PDO::FETCH_ASSOC );
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