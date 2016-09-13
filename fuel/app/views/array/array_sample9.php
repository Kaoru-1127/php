<?php
	/**
	 * イテレータ関数サンプル
	 */

	$array_associat = array(
			'red'	=>	"赤",
			'blue'	=>	"青",
			'yellow'=>	"黄"
	);

	//current(),key()関数
	echo "current()関数:<br>";
	echo current($array_associat);
	echo "<br>key()関数:<br>";
	echo key($array_associat);

	//next()関数
	echo "<br><br>next()関数実行後:<br>";
	next($array_associat);
	echo current($array_associat);

	//reset()関数
	echo "<br><br>reset()関数実行前:<br>";
	echo current($array_associat);
	reset($array_associat);
	echo "<br>reset()関数実行後:<br>";
	echo current($array_associat);

	//prev()関数
	echo "<br><br>prev()関数実行後(next実行後):<br>";
	next($array_associat);
	echo current($array_associat);
	echo "<br>prev()関数実行後:<br>";
	prev($array_associat);
	echo current($array_associat);

	//end()関数
	echo "<br><br>end()関数実行前:<br>";
	echo current($array_associat);
	echo "<br>end()関数実行後:<br>";
	end($array_associat);
	echo current($array_associat);

	//each()関数
	reset($array_associat);
	while(List($color_en,$color_jp) = each($array_associat)){
		echo "<br><br>key={$color_en}";
		echo "<br>value={$color_jp}";
	}

?>

