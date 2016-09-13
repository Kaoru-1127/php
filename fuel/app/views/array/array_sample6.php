<?php
	/**
	 * あるキーが配列の中に存在するかどうかの判定サンプル
	 */

	//キーの判定(連想配列)
	//インデックス配列の場合も変わらないため割愛します。
	//array_key_exists()関数は、値が0、false、NULLの場合でもtrueで返します。
	//isset()関数の場合は、NULLの場合にfalseとなります。
	$array_associat	=	array(
			'name'		=>	'バナナ',
			'collar'	=>	'黄色',
			'value'		=>	'100円'
	);
	if(array_key_exists('name', $array_associat)){
		echo "nameキーあり<br>";
	}else{
		echo "nameキーなし<br>";
	}

	if(array_key_exists('id', $array_associat)){
		echo 'idキーあり<br>';
	}else{
		echo 'idキーなし<br>';
	}
?>