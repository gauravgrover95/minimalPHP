<?php

/**
* File That has static function 'getConnection' that returns connection to the 
* mentioned DC
*/

namespace App\Core\Database;

 use \PDO as PDO;

class Connection {
	public static $config = [
		'DB_USERNAME' => 'root',
		'DB_PASSWORD' => '',
		// 'DB_NAME' => 'MycoRegDB', // original sir data
		'DB_NAME' => 'abcd1', // latest data - sir + sys bio data
		// 'DB_NAME' => 'abc', // old data - modified sir data
		// 'DB_NAME' => 'bcd', //    12,500 test data entries
		// 'DB_NAME' => 'bce', // 5000 test data entries
		// 'DB_NAME' => 'bcf', // 2500 test data entries
		// 'DB_NAME' => 'bcg', // 1000 test data entries
		'DB_HOST' => 'localhost',
		'DB_DRIVER' => 'mysql',
	];

	public static function make() {		
		$config = self::$config;
		try {
			$conn = new PDO(
				sprintf(
					'%s:host=%s;dbname=%s',
					$config["DB_DRIVER"],
					$config["DB_HOST"],
					$config["DB_NAME"]
				), 
				$config['DB_USERNAME'], 
				$config['DB_PASSWORD']
			);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		return $conn;
	}
	
}
