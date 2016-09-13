<?php
	/**
	 * キーと値の取得サンプル
	 */

	//キーの取得(連想配列)
	//インデックスはいてるでも使用できますが
	//あまり意味がないため割愛します。
	$array_associat	=	array(
		'blue'		=>	'空',
		'yellow'	=>	'バナナ',
		'red'		=>	'血液'
	);
	$keys			=	array_keys($array_associat);
	var_dump($keys);

	//値の取得(連想配列)
	//インデックスはいてるでも使用できますが
	//あまり意味がないため割愛します。
	$values			=	array_values($array_associat);
	var_dump($values);
?>
