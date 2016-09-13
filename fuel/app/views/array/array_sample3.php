<?php
	/**
	 * 多次元配列の宣言、表示、展開サンプル
	 */

	//多次元配列の宣言(インデックス配列)
	$row_index0	=	array(1,2,3);
	$row_index1	=	array(4,5,6);
	$row_index2	=	array(7,8,9);
	$array_multi	=	array($row_index0,$row_index1,$row_index2);
	var_dump($array_multi);

	//多次元配列の表示(指定)(インデックス配列)
	for($i=0;$i<count($array_multi);$i++){
		for($c=0;$c<count($array_multi[$i]);$c++){
			echo "array_multi[{$i}][{$c}]={$array_multi[$i][$c]}<br>";
		}
	}

	//多次元配列の展開(インデックス配列)
	list($row1,$row2,$row3) = $array_multi;
	var_dump($row1);
	var_dump($row2);
	var_dump($row3);


	//多次元配列の宣言(連想配列)
	$row_associat1_1	=	array(
			'id'	=>	"0001",
			'name'	=>	"バナナ",
			'color'	=>	"黄色",
			'type'	=>	"食べ物");
	$row_associat1_2	=	array(
			'id'	=>	"0002",
			'name'	=>	"緑茶",
			'color'	=>	"緑色",
			'type'	=>	"飲み物");
	$row_associat1	=	array($row_associat1_1,$row_associat1_2);
	$row_associat2_1	=	array(
			'id'	=>	"0001",
			'value'	=>	100);
	$row_associat2_2	=	array(
			'id'	=>	"0002",
			'value'	=>	150);
	$row_associat2	=	array($row_associat2_1,$row_associat2_2);
	$array_multi	=	array(
			'item'	=>$row_associat1,
			'value'	=>$row_associat2);
	var_dump($array_multi);

	//多次元配列の表示(指定)(連想配列)
	//例：$array_multi['item']['id']でも出力可能
	foreach ($array_multi as $type => $array_1){
		echo "type={$type}<br>";
		foreach ($array_1 as $array_2){
			foreach ($array_2 as $key=>$value)
			{
				echo "key={$key},value={$value}<br>";
			}
			echo "<br>";
		}
	}

	//多次元配列の展開(連想配列)
	//連想配列では、list()関数を使用することはできません。
	//list()関数では、インデックス配列の0から順に処理を行うため途中歯抜けになっていてもUndefined offsetエラーになります。

?>


