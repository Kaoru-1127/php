<?php
	/**
	 * 配列のスライス、分割
	 */

	//配列のスライス
	//array_slice()関数が意味を持つのはインデックス関数のみです。
	$array_index	=	array('one','two','three','four');
	$array_slice	=	array_slice($array_index, 2,2);

	var_dump($array_slice);

	//配列の分割
	$array_numbers	=	range(1,9);
	$rows			=	array_chunk($array_numbers, 3);

	var_dump($rows);
?>
