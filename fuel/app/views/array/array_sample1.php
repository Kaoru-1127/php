<?php
	/**
	 * インデックス配列、連想配列の宣言、末尾への追加、表示サンプル
	 */

	//インデックス配列宣言
	//別の宣言方法($array_associat=['今日','明日','明後日'];)
	$array_index	=	array('今日','明日','明後日');

	//count(配列)で配列の大きさを取得
	for($i=0;$i<count($array_index);$i++){
		//インデックス配列出力(例：array_index[0]=今日)
		echo "array_index[{$i}]={$array_index[$i]}<br>";
	}

	//インデックス配列　追加
	$array_index[]	=	'明後日';

	//インデックス配列の中身を出力
	var_dump($array_index);

	//連想配列宣言
	//別の宣言方法($array_associat=['blue'=>'空','yellow'=>'バナナ','red'=>'血液'];)
	$array_associat	=	array(
			'blue'		=>	'空',
			'yellow'	=>	'バナナ',
			'red'		=>	'血液'
	);

	foreach ($array_associat as $key => $value){
		//インデックス配列出力(例：array_index['blue']=空)
		echo "array_associat['{$key}']={$value}<br>";
	}
	//連想配列への追加
	$array_associat	+=	array('green'	=>	'緑茶');

	//連想配列の中身を出力
	var_dump($array_associat);
?>