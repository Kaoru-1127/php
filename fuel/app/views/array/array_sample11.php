<?php
	/**
	 * array_reduce()関数サンプル
	 */

	//array_reduce()関数
	$array_index	=	range(1,9);
	//第一引数に今までの合計値、第2引数に配列の値がセットされます。
	//array_reduce関数を利用する場合は、合計値を返り値として返す必要があります。
	$addItUp	=	function($runningTotal,$currentValue){
		$runningTotal += $currentValue;
		return $runningTotal;
	};
	//第3引数にデフォルト値をセットすることも可能です。
	//配列が空であった場合にセットしたデフォルト値が返されます。
	//デフォルト値をセットしなかった場合は、NULLが返されます。
	$result	=	array_reduce($array_index,$addItUp);
	echo $result;
?>