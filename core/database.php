<?php
// Подключение к базе данных
$connect = @mysqli_connect($HOST_DB, $USER_DB, $PASS_DB, $NAME_DB);


if (mysqli_connect_errno()){
	echo 'ERROR: '.mysqli_connect_errno();
	exit();
}


function get_group_products_by_par_id($par_id){
	global $connect;

	$sql = "SELECT * FROM group_products WHERE par_id = $par_id ORDER BY name ASC;";
	$result = @mysqli_query($connect, $sql);
	if (!$result){
		echo "MySQL ERROR: ".mysqli_error($connect)."</br>";
		echo "SQL = \"". $sql . "\"";

		return 0;
	} else{
		return $result;
	}
}


function get_products_by_group_id($group_id){
	global $connect;

	$sql = "SELECT * FROM products WHERE group_id = $group_id ORDER BY name ASC";
	$result = @mysqli_query($connect, $sql);
	if (!$result){
		echo "MySQL ERROR: ".mysqli_error($connect)."</br>";
		echo "SQL = \"". $sql . "\"";

		return 0;
	} else{
		return $result;
	}

}


function get_all_products(){
	global $connect;

	$sql = "SELECT * FROM products";
	$result = @mysqli_query($connect, $sql);
	if (!$result) {
		echo "MySQL Error: ".mysqli_error($connect)."</br>";
		echo "SQL = \"". $sql . "\"";

		return 0;
	} else {
		return $result;
	}
} 






// Окно авторизации 
function authorization($login, $pass){
	global $connect;

	$sql = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";
	$result = @mysqli_query($connect, $sql);
	if (!$result) {
		echo "MySQL Error: ".mysqli_error($connect)."</br>";
		echo "SQL = \"". $sql . "\"";
	} else {
		$res_arr = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $res_arr['id'];
		usertimeupdate($res_arr['id']);
	}

}


//Пользователь 
function userinfo($session_id){
	global $connect;

	$sql = "SELECT * FROM users WHERE id = $session_id;";
	$result = @mysqli_query($connect, $sql);
	if (!$result) {
		echo "MySQL Error: ".mysqli_error($connect)."</br>";
		echo "SQL = \"". $sql . "\"";
	} else {
	return mysqli_fetch_assoc($result);
	}
}

//Обновление времени 
function usertimeupdate($user_id){
	global $connect;

	$sql = "UPDATE users SET date_login = NOW() WHERE id = ".$user_id;
	$result = @mysqli_query($connect, $sql);
	if (!$result) {
		echo "MySQL Error: ".mysqli_error($connect)."</br>";
		echo "SQL = \"". $sql . "\"";
	}
}


?>