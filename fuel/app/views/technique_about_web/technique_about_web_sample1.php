<?php
	/**
	 * GET,POST,Cookie,SESSIONについて
	 */
	session_start();
?>
<HTML>
<HEAD>
	<?php echo Asset::css('main.css'); ?>
</HEAD>
<BODY>
	<?php
		//GETリクエスト
		//試す場合は、URLに"?GET_DATA1=任意の文字"を追記してください。
		if(isset($_GET['get_data1']))
			echo "GET_DATA1={$_GET['get_data1']}<br>";

		//POST
		//試す場合は、POSTデータ送信ボタンを押下してください。
		if((isset($_POST['post_data1']) and isset($_POST['send'])))
			echo "POST_DATA1={$_POST['post_data1']}<br>";

		//クッキー操作
		//クッキーセット
		if((isset($_POST['cookie_data1']) and isset($_POST['send'])))
			setcookie('cookie_data1',$_POST['cookie_data1']);
		//クッキー削除
		if(isset($_POST['cookie_del'])){
			setcookie('cookie_data1', "", time() - 3600);
		}
		//クッキー表示
		if(isset($_COOKIE['cookie_data1']))
			echo "COOKIE_DATA1={$_COOKIE['cookie_data1']}<br>";


		//セッション操作
		//セッションセット
		if((isset($_POST['session_data1']) and isset($_POST['send'])))
			$_SESSION['session_data1'] = $_POST['session_data1'];
		//セッション削除
		if(isset($_POST['session_close'])){
			$_SESSION = array();
			setcookie(session_name(), '', time()-42000, '/');
			session_destroy();
		}
		//セッション表示
		if(isset($_SESSION['session_data1']))
			echo "SESSION_DATA1={$_SESSION['session_data1']}<br>";


	?>
	<form method="post" action="">
		<input type="hidden" name="post_data1" value="POST_DATA1">
		<input type="hidden" name="cookie_data1" value="COOKIE_DATA1">
		<input type="hidden" name="session_data1" value="SESSION_DATA1">
		<button type="submit" name="send">POSTデータ送信</button>
		<button type="submit" name="cookie_del" value="true">クッキー削除</button>
		<button type="submit" name="session_close" value="true">セッション終了</button>
		<button type="submit" name="no_action">更新(クッキー、セッション)</button>
	</form>
</BODY>
</HTML>