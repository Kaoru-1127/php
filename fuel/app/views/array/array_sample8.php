<?php
	/**
	 * 配列と変数の変換
	 */

	//配列からの変数作成
	$array_associat	=	array(
		'id'	=>	"0001",
		'name'	=>	"バナナ",
		'color'	=>	"黄色",
		'type'	=>	"食べ物");
	extract($array_associat);
	echo "id={$id}<br>";
	echo "name={$name}<br>";
	echo "color={$color}<br>";
	echo "type={$type}<br>";

	//変数から配列作成
	$array	=	compact("id","name");
	var_dump($array);
?>