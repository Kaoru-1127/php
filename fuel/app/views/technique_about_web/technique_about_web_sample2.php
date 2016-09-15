<?php
	/**
	 * POSTのされた時だけ動作させたい場合のサンプル
	 */
?>

<HTML>
	<HEAD>
		<?php echo Asset::css('main.css'); ?>
	</HEAD>
	<BODY>
		<?php
			//POSTされた場合のみ表示
			if($_SERVER['REQUEST_METHOD']=='POST')
				echo "POSTされました。<br>";
		?>
		<form method="post" action="">
			<button type="submit">POST</button>
		</form>
	</BODY>

</HTML>
