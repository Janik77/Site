<?php
	$tpl = new Smarty; //Создание объекта Smarty

	//$tpl->caching = true; //Включаем кэширование

	//$tpl->cache_lifetime = 120;





	$name = 'Hello Smarty'; // Создали переменную 

	$tpl->assign('name', $name); // Передали переменную


	//Создадим массив
	// $arr1 = array('Ivanov' , 'Petrov', 'Sidorov');

	//Передадим шаблон в шаблон
	// $tpl->assign('arr1',$arr1);


	//Создадим ключевой массив

	// $arr2 = array(
	// 	'Key1' =>'Ivanov',
	// 	'Key2' =>'Petrov',
	// 	'Key3' =>'Sidorov',
	// 		);

	//Вывод массива
	$tpl->assign('arr2',array(
		'Key1' =>'Ivanov',
		'Key2' =>'Petrov',
		'Key3' =>'Sidorov',
			));

	//Создание двумерного массива

	$data = array();

	for($i=0; $i<10; $i++)	{
		$data[] = array(
			'Num' => $i,
			'Name' => 'Name ' . ($i+1),
			'Value' =>	($i+1) * 100
		);
	}

	//print_r($data);

	//Передадим массив в шаблон

	$tpl->assign('data',$data);


	//Возьмем переменную $TITLE из файла config.php
	$tpl->assign('TITLE',$TITLE);



	$tpl->display('main.tpl'); //Вывведеи шаблон main.tpl на экран
?>