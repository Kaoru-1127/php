<?php
	/**
	 * 配列の要素の削除と追加サンプル
	 */

	//配列要素の削除(インデックス配列)
	$array_index	=	array('one','two','three','four');
	$array_del		=	array_splice($array_index, 1,2);
	var_dump($array_index);
	var_dump($array_del);

	//配列要素の削除と追加(インデックス配列)
	$array_index	=	array('one','two','three','four');
	$array_new	=	array('five','six');
	array_splice($array_index, 2,1,$array_new);
	var_dump($array_index);

	//配列要素の追加(インデックス配列)
	$array_index	=	array('one','two','three','four');
	$array_new	=	array('five','six');
	array_splice($array_index, 2,0,$array_new);
	var_dump($array_index);


	//配列要素の削除(連想配列)
	$array_associat	=	array(
		'blue'		=>	'空',
		'yellow'	=>	'バナナ',
		'red'		=>	'血液'
	);
	$array_del		=	array_splice($array_associat, 1,2);
	var_dump($array_associat);
	var_dump($array_del);

	//配列要素の削除と追加(連想配列)
	$array_associat	=	array(
		'blue'		=>	'空',
		'yellow'	=>	'バナナ',
		'red'		=>	'血液'
	);
	$array_new	=	array(
			'black'	=>	'炭',
			'green'	=>	'緑茶'
	);
	array_splice($array_associat, 1,1,$array_new);
	var_dump($array_index);

	//配列要素の追加(連想配列)
	$array_associat	=	array(
		'blue'		=>	'空',
		'yellow'	=>	'バナナ',
		'red'		=>	'血液'
	);
	$array_new	=	array(
			'black'	=>	'炭',
			'green'	=>	'緑茶'
	);
	array_splice($array_index, 1,0,$array_new);
	var_dump($array_index);
?>