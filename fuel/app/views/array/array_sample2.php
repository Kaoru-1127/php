<?php
	/**
	 * 範囲指定での配列代入、配列の大きさの取得、配列要素の継ぎ足しサンプル
	 */

	//範囲指定による配列への代入(数字)
	$numbers = range(1,10);
	var_dump($numbers);

	$revarce_numbers	=	range(10, 1);
	var_dump($revarce_numbers);

	//範囲指定による配列への代入(小文字)
	$char	=	range('a','z');
	var_dump($char);

	//文字列を範囲指定した場合は、最初の文字を使用して作成します。
	$string	=	range('aaa','zzz');
	var_dump($string);

	//配列の大きさの取得(インデックス配列)
	//配列の大きさを取得する関数には他にもsizeof()関数があります。(count()関数と同じ使用方法です。)
	$array_index	=	array('今日','明日','明後日');
	$size_index		=	count($array_index);
	echo "array_indexサイズ：{$size_index}<br>";

	//配列の大きさの取得(連想配列)
	//配列の大きさを取得する関数には他にもsizeof()関数があります。(count()関数と同じ使用方法です。)
	$array_associat	=	array(
		'blue'		=>	'空',
		'yellow'	=>	'バナナ',
		'red'		=>	'血液'
	);
	$size_associat	=	count($array_associat);
	echo "array_associatサイズ：{$size_associat}<br>";

	//配列の要素継ぎ足し(インデックス配列)
	$array_temp =	array(10,9);
	$array_pad	=	array_pad($array_temp,5,0);
	var_dump($array_pad);
	$array_pad	=	array_pad($array_temp,-5,0);
	var_dump($array_pad);

	//配列の要素継ぎ足し(連想配列)
	//継ぎ足される要素は、インデックス配列になるので注意
	$array_temp =	array(
		'blue'		=>	'空',
		'yellow'	=>	'バナナ',
	);
	$array_pad	=	array_pad($array_temp,5,0);
	var_dump($array_pad);

?>