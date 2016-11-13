<?php
function connect_db() {
	//Подключаемся к серверу базы данных
	$db = mysqli_connect('localhost','Viktor','1234','for_cart');
	if(!$db) {
		exit('Error'.mysqli_error());
	}
	//Устанавливаем кодировку запросов
	mysqli_query($db,"SET NAMES cp1251");
	
	return $db;
}
function get_goods($db,$id = FALSE) {
	//Запрос на выборку все товаров
	$sql = "SELECT * FROM magazine";
	
	$result = mysqli_query($db,$sql);
	for($i = 0;$i < mysqli_num_rows($result); $i++) {
		$goods[] = mysqli_fetch_array($result);
	}
	
	return $goods;
}
?>