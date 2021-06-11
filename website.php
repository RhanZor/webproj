<?php
ob_start();

if(isset($_GET['pg'])){

	switch ($_GET['pg']) {
		case 'home':
		 include "home.php";
		break;

		case 'pg2':
		 include 'page2.php';
		break;

		case 'pg3':
		 include 'page3.php';
		break;

		case 'pg4':
		 include 'page4.php';
		break;

		case 'pgX':
		 include 'MNGR.php';
		break;
		
		default:
		 include 'home.php';
		break;
	}
} else {
	include 'home.php';
}

?>