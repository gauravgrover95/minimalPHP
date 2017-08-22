<?php

namespace App\App\Controller;

use App\Core\Database\Model\SigmaReg;


class HomeController {
	/**
	* # dislays home page
	*/
	function get() {
		echo $GLOBALS['twig']->render('index.twig', []);
	}
}