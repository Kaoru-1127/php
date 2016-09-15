<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
use Fuel\Core\Response;

class Controller_Tecaboutweb extends Controller{
	public function action_taw1(){
		$view = View::forge('technique_about_web/technique_about_web_sample1.php');
		return Response::forge($view);
	}
}
