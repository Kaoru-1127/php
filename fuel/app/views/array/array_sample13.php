<?php
	/**
	 * 配列のソートサンプル
	 */
	//値の昇順ソート(インデックス配列)
	//連想配列では使用することができません。
	$array_index	=	array("Miura","Aono","Matsuda","Ooyagi","Oota");
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

