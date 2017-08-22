<?php
namespace App\Core\Utilities;

class Node {
	public $info;
	public $annotation;
	public $level;

	public function __construct($info) {
		$this->info = $info;
		$this->level = NULL;
	}

	public function __toString() {
		return "$this->info";
	}
};