<?php
	/**
	 * array_walk()関数サンプル
	 */
	//array_walk()関数
	$array_associat = array(
			'red'	=>	"赤",
			'blue'	=>	"青",
			'yellow'=>	"黄"
	);
	$echoRow	=	function($value,$key)
	{
		echo "key={$key},value={$value}<br>";
	};
	array_walk($array_associat,$echoRow);


	//array_walk()関数 第3引数あり
	//第3引数を渡すことですべての処理に使用することができる。
	//複数の処理を実施したい場合は、配列を渡すことで実現可能
	$red	=	'red';
	$echoRow2	=	function($value,$key,$color){
		if($color==$key){
			echo "color=key={$key},value={$value}<br>";
		}
	};
	array_walk($array_associat,$echoRow2,$red);


?>