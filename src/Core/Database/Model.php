<?php 

/**
* Query Builder Class that handles the responsibility of making all queries to database
* Other models just extend this file and mention the table name required
*/
namespace App\Core\Database;
use App\App\Controller\SigmaReg;

class Model extends Connection{

	/**
	* get all the data entries in a table
	*
	* @return {PDOStatement Object: iteratable object to get all data entries}
	*/
	public static function all() {
		$conn = self::make();
		$table = static::$table;
		return $conn->query("SELECT * FROM $table");
	}


	/**
	* get distinct the data entries in a table
	*
	* @return {PDOStatement Object: iteratable object to get distinct data entries}
	*/
	public static function distinct($conn, $col) {
		$table = static::$table;
		return $conn->query("SELECT DISTINCT $col FROM $table");
	}


}