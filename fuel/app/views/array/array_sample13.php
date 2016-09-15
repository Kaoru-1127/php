<?php
	/**
	 * 配列のソートサンプル
	 */
	//値の昇順ソート(インデックス配列)
	//連想配列では使用することができません。
	$array_index	=	array("Miura","aono","Matsuda","Ooyagi","Oota");
	sort($array_index);
	var_dump($array_index);

	//値の降順ソート(インデックス配列)
	//連想配列では使用することができません。
	rsort($array_index);
	var_dump($array_index);

	//値の独自ソート(インデックス配列)
	//連想配列では使用することができません。
	$usersort	=	function($a,$b){
		if($b == "Miura"){
			return 1;
		}else if($a == "Miura"){
			return -1;
		}
		return ($a==$b)? 0:(($a<$b)? -1 : 1);
	};
	usort($array_index, $usersort);
	var_dump($array_index);

	//自然順ソート(インデックス配列)
	//natcasesort()関数は、大文字、小文字無視します。
	//キーは振り直ししません。
	$array_index	=	array("Num11","num2","num3","Num1","num4");
	natsort($array_index);
	var_dump($array_index);
	natcasesort($array_index);
	var_dump($array_index);

	//複数配列を一括ソート(インデックス配列)
	$name	=	array("Miura",	"Aono",	"Ooyagi",	"Oota"	,"Matsuda");
	$age	=	array(29,	    25,		30,			25		,25);
	$point	=	array(50,		60,		50,			100		,60);

	array_multisort($point,SORT_DESC,$age,SORT_ASC,$name,SORT_ASC);
	$array_count = count($name);
	for($i=0;$i<$array_count;$i++){
		echo "{$name[$i]}\t{$age[$i]}才\t{$point[$i]}点<br>";
	}

	//配列の逆転(インデックス配列)
	$reverse	=	array_reverse($array_index);
	var_dump($array_index);
	var_dump($reverse);

	//ランダム化(インデックス配列)
	shuffle($array_index);
	var_dump($array_index);


	//値の昇順ソート(連想配列）
	$array_associat = array(
			'apple'		=>	"red",
			'pineapple'	=>	"yellow",
			'greentea'	=>	"green"
	);
	asort($array_associat);
	var_dump($array_associat);

	//値の降順ソート(連想配列)
	arsort($array_associat);
	var_dump($array_associat);

	//値の独自ソート(連想配列)
	$usersort	=	function($a,$b){
		if($b == "yellow"){
			return 1;
		}else if($a == "yellow"){
			return -1;
		}
		return ($a==$b)? 0:(($a<$b)? -1:1);
	};
	uasort($array_associat, $usersort);
	var_dump($array_associat);

	//キーの昇順ソート(連想配列)
	ksort($array_associat);
	var_dump($array_associat);

	//キーの降順ソート(連想配列)
	krsort($array_associat);
	var_dump($array_associat);

	//キーの独自ソート(連想配列)
	$usersort	=	function($a,$b){
		if($b == "apple"){
			return 1;
		}else if($a=="apple"){
			return -1;
		}
		return ($a==$b)?0:(($a<$b)? -1:1);
	};
	uksort($array_associat, $usersort);
	var_dump($array_associat);

	//自然順ソート(連想配列)
	//以下は、値を自然順ソートした例になります。
	//同様にuksort()関数を利用することでキーを自然順ソートすることも可能です。
	$array_associat = array(
			'key1'	=>	"value1",
			'key11'	=>	"value11",
			'key2'	=>	"value2"
	);
	uasort($array_associat, "strnatcmp");
	var_dump($array_associat);

	//配列の逆転(連想配列)
	$reverse = array_reverse($array_associat);
	var_dump($array_associat);
	var_dump($reverse);

	//ランダム化(連想配列)
	//実行するとインデックス配列で再作成されます。
	shuffle($array_associat);
	var_dump($array_associat);
