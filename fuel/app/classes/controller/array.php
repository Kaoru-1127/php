<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
use Fuel\Core\Response;

class Controller_Array extends Controller{
	public function action_arraysample1(){

		$view = View::forge('array/array_sample1');
		return Response::forge($view);
	}
}