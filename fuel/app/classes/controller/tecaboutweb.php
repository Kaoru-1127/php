<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
use Fuel\Core\Response;

class Controller_Tecaboutweb extends Controller{
	public function action_taw1(){
		$view = View::forge('technique_about_web/technique_about_web_sample1.php');
		return Response::forge($view);
	}
	public function action_taw2(){
		$view = View::forge('technique_about_web/technique_about_web_sample2.php');
		return Response::forge($view);
	}
	public function action_taw3(){
		$view = View::forge('technique_about_web/technique_about_web_sample3.php');
		return Response::forge($view);
	}
}
