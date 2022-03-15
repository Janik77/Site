<?php
	$tpl = new Smarty; //Создание объекта Smarty

	//$tpl->caching = true; //Включаем кэширование

	//$tpl->cache_lifetime = 120;
		// http://myshop/?page-about
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		}
		else{
			$page ='';
		}
		$group_products_list = array();
		$group_products_obj = get_group_products_by_par_id(0);

		while($row = mysqli_fetch_assoc($group_products_obj)){
			//Проверка подгрупп
			$row['sub'] = array();
			$sub_group_obj = get_group_products_by_par_id($row['id']);
			while($sub_row = mysqli_fetch_assoc($sub_group_obj)){
				$row['sub'][] = $sub_row;
			}

			$group_products_list[] = $row;
		}
		$tpl->assign('gpl',$group_products_list);
	//Главная страница
	//===================================================
	if ($page == '') {
		$tpl->assign('PageTitle', 'Акционные товары');
		$tpl->assign('Content', $content);

		// print_r($group_products_list);
		// $tpl->assign('Massivdlyzvyvoda', $group_products_obj);
		
		
		
		$tpl->display('main.tpl');
	//Магазине...
	//===================================================	
	} elseif ($page == 'shop'){
		$tpl->assign('PageTitle', 'Магазин');
		$tpl->assign('Content', $content);
		
		$tpl->display('main.tpl');



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
		
		$products_list = array(); 
		$products_obj = get_group_products_by_par_id($group);
		
		while ($row = mysqli_fetch_assoc($products_obj)){
			$products_list[] = $row;
		}

		print_r(products_list);
		$tpl->assign('products',$products_list);
		$tpl->display('main.tpl');


	
	//страница о Корзине...
	//===================================================	
	} elseif ($page == 'products'){
		
		$tpl->assign('PageTitle', 'Корзина(0)');
		$tpl->assign('Content', $content);
		
		$tpl->display('main.tpl');


	}  else{
		$content = '<h3> 404 page</h3>';
		$tpl->assign('PageTitle', '404');
		$tpl->assign('Content', $content);
		
		$tpl->display('main.tpl');

	}


?>