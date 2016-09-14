<?php
	/**
	 * 値の検索
	 */
	//値の検索
	//インデックス配列の場合でもほぼ変わらないため割愛します。
	//ループ（for等）を利用するよりも高速で検索することが可能です。
	$array_associat = array(
			'red'	=>	"赤",
			'blue'	=>	"青",
			'yellow'=>	"黄"
	);

	$search_word		=	"青";
	//in_array()関数の第3引数にtrueを指定することで値の型が一致するかどうかも調べることができます。
	if(in_array($search_word,$array_associat)){
		echo "配列内に{$search_word}はありました。<br>";
	}else{
		echo "配列内に{$search_word}はありませんでした。<br>";
	}

	//array_search()関数は、in_array()関数同様値を検索することができます。
	//違いは、返り値がin_array()関数と違い検索で見つかった値のキーが返ります。
	echo array_search($search_word, $array_associat);



