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
		
	//Проверка на авторизацию
	if ((!empty($_POST['login'])) && (!empty($_POST['pass']))){
		authorization($_POST['login'], $_POST['pass']);
		header('location: ./', true, 301);
	} 

	//Запрос информации
	if (!isset($_SESSION['id'])) {
		$session_id = -1;

	} else{
		$session_id = $_SESSION['id'];
	}
	

$user_info = userinfo($session_id);

if ($user_info) {
		$cur_time_unix = $CUR_TIME;
		$login_time_unix = strtotime($user_info['date_login']);

		$user_time = $cur_time_unix - $login_time_unix;

		// echo "CUR_TIME = ".date("Y-m-d H:i:s", $cur_time_unix)."\n";
		// echo $cur_time_unix."\n";
		// echo $login_time_unix."\n";
		// echo $user_time."\n";

		//Проверка на выход пользователя
		if ((isset($_GET['logout'])) || ($user_time > $TIME_LIVE)) {
			session_destroy();
			header('Location: ./', true, 301); //После выхода перенаправляемся на главную страницу
		} else {
			usertimeupdate($session_id);
		}
	}


	//Главная страница
	//===================================================
	if ($page == '') {
		$content = "{include file='content/products_view.tpl'}";
		




	//Магазине...
	//===================================================	
	} elseif ($page == 'shop'){
		$content = "{include file='content/products_view.tpl'}";


		
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

