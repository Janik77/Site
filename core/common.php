<?php
	// http://myshop/?page-about
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		}
		else{
			$page ='';
		}

	if(isset($_GET['group'])){
		$group = $_GET['group'];
		}
		else{
			$group = 0;
		}

		$path = './templates/';

	//Главная страница
	//===================================================
	if ($page == '') {
		include($path . 'content/main_content.php');
		$content = $main_content;




	//Магазине...
	//===================================================	
	} elseif ($page == 'shop'){
		$content = '<h3> Shop page</h3>';


		
	//страница о магазине...
	//===================================================	
	} elseif ($page == 'about'){
		$content = '<h3> About page</h3>';
	
	
	//страница о Корзине...
	//===================================================	
	 }elseif ($page == 'corzina'){
		$content = '<h3> About corzina</h3>';
	


	} else{
		$content = '<h3> 404 page</h3>';
	
	}
?>

