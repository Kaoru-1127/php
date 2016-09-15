<?php
	/**
	 * 配列全体に対する処理
	 */
	//配列の和の計算
	//文字を配列に含めた場合は、無視される。
	//インデックス配列も同様のため割愛します。
	$array_associat = array(
			'key1'	=>	1,
			'key2'	=>	"4",
			'key3'	=>	7,
			'key4'	=>	"ご",
			'key5'	=>	"two"
	);
	echo array_sum($array_associat);

	//2つの配列のマージ(インデックス配列)
	//第2引数に設定した配列が第1引数に設定した配列の後に追加されます。
	//第2引数側を振り直します。
	$first	=	array("red","green");
	$second	=	array("yellow","purple");

	$merged	=	array_merge($first, $second);
	var_dump($merged);

	//2つの配列のマージ(連想配列)
	//同じキーのものがあれば第2引数で指定した配列の値を上書きする。
	$first	=	array(
			'miura'	=>"apple",
			'kaneko'=>"banana",
			'ota'	=>"peach"
	);
	$second	=	array(
			'miura'	=>"grapefruit",
			'oyagi'	=>"pineapple"
	);
	$marged	=	array_merge($first,$second);
	var_dump($marged);

	//配列の差を取得
	//第2引数及び第3引数に含まれていない第1引数の値を取得する。
	//配列は、インデックス配列、連想配列とも併せて使用可能
	//比較には、===を利用
	$first	=	array("red","green","yellow","brown","black");
	$second	=	array("red","purple","green");
	$third	=	array(
			'color1'	=>"yellow",
			'color2'	=>"brown",
	);
	$difference	=	array_diff($first,$second,$third);
	var_dump($difference);

	//配列のフィルタリング
	$array_associat	=	array(
			'miura'	=>	29,
			'ota'	=>	30,
			'kaneko'=>	25
	);
	$callback	=	function($value){
		return $value <28;
	};
	$filtered	=	array_filter($array_associat,$callback);
	var_dump($filtered);
