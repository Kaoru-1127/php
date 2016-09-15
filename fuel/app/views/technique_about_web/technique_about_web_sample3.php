<?php
	/**
	 * 固定フォームサンプル
	 */

?>


<html>
	<head>
		<?php echo Asset::css('main.css'); ?>

	</head>
	<body>
	<?php
		//GETリクエスト取得
		if(isset($_GET['text'])){
			$value	=	htmlspecialchars($_GET['text']);
		}else{
			$value	=	null;
		}
	?>
		<form action="">
			<input type="text" name="text" value="<?php echo $value; ?>">
			<button type="submit">GET</button>
		</form>
	</body>
</html>