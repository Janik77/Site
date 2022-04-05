<?php
	$tpl = new Smarty; //Создание объекта Smarty

	//$tpl->caching = true; //Включаем кэширование

	//$tpl->cache_lifetime = 120;
		// http://myshop/?page-about
	$tpl->assign('user_info', $user_info);


	if(isset($_GET['page'])){
		$page = $_GET['page'];
		}
		else{
			$page ='';
		}
		$group_products_list = array();
		$group_products_obj = get_group_products_by_par_id(0);

		$set_active = 0; //Активный элемент не установлен

		while($row = mysqli_fetch_assoc($group_products_obj)){
			//Проверка подгрупп
			$row['sub'] = array();
			if (($group == 0) && ($set_active == 0)) {
				$row['active'] = 1;
				$set_active = 1; //Активный элемент установлен
			} elseif (($group == $row['id']) && ($set_active == 0)) {
				$row['active'] = 1;
				$set_active = 1; //Активный элемент установлен
			} else {
				$row['active'] = 0; //Не активный элемент
			}
			$sub_group_obj = get_group_products_by_par_id($row['id']);
			while($sub_row = mysqli_fetch_assoc($sub_group_obj)){
				$sub_row['active'] = 0;
				if (($sub_row['id'] == $group) && ($set_active == 0)) {
					$row['active'] = 1; //Нашли активню группу
					$sub_row['active'] = 1;
					$set_active = 1; //Активный элемент установлен
				}
				$row['sub'][] = $sub_row;
			}

			$group_products_list[] = $row;
		}
if ($user_info) {
  //Пользователь авторизован
  //Затем проверяем уровень доступа пользователя
  if ($user_info['level_id'] == 1) {
    //Администратор
  } elseif ($user_info['level_id'] == 2) {
    //Управляющий
  } elseif ($user_info['level_id'] == 3) {
    //Менеджер
  } elseif ($user_info['level_id'] == 4) {
    //Покупатель
  }
} else {
  //Это гость
}

		

		$tpl->assign('gpl',$group_products_list);
	//Главная страница
	//===================================================
	if ($page == '') {
		$tpl->assign('PageTitle', 'Акционные товары');
		$tpl->assign('Content', $content);

		
		$products_list = Array();
		$products_obj = get_all_products();

		while ($row = mysqli_fetch_assoc($products_obj)) {
			$products_list[] = $row;
		}

		//print_r($products_list);

		$tpl->assign('shop', $products_list);
		$tpl->assign('user_info', $user_info);
		$tpl->display('main.tpl');




	//Магазине...
	//===================================================	
	} elseif ($page == 'shop'){
		$tpl->assign('PageTitle', 'Магазин');
		$tpl->assign('Content', $content);
		$products_list = Array();
		$products_obj = get_products_by_group_id($group);

		while ($row = mysqli_fetch_assoc($products_obj)) {
			$products_list[] = $row;
		}

		//print_r($products_list);

		$tpl->assign('shop', $products_list);
		$tpl->display('main1.tpl');
		




	//страница о магазине...
	//===================================================	
	} elseif ($page == 'about'){
		$tpl->assign('PageTitle', 'О магазине');
		$tpl->assign('Content', $content);
		
		$tpl->display('main.tpl');






	//страница о Корзине...
	//===================================================	
	} elseif ($page == 'corzina'){
		
		$tpl->assign('PageTitle', 'Корзина(0)');
		$tpl->assign('Content', $content);
		
		
		$tpl->display('main.tpl');




	
	//страница о Корзине...
	//===================================================	
	

	}  else{
		$content = '<h3> 404 page</h3>';
		$tpl->assign('PageTitle', '404');
		$tpl->assign('Content', $content);
		
		$tpl->display('main.tpl');

	}


?>