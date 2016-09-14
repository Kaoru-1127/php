<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
use Fuel\Core\Response;
use Fuel\Core\Request;

class Controller_Array extends Controller{
	public function action_arraysample1(){

		$view = View::forge('array/array_sample1');
		return Response::forge($view);
	}
	public function action_arraysample2(){

		$view = View::forge('array/array_sample2');
		return Response::forge($view);
	}
	public function action_arraysample3(){

		$view = View::forge('array/array_sample3');
		return Response::forge($view);
	}
	public function action_arraysample4(){
		$view = View::forge('array/array_sample4');
		return Response::forge($view);
	}
	public function action_arraysample5(){
		$view = View::forge('array/array_sample5');
		return Response::forge($view);
	}
	public function action_arraysample6(){
		$view = View::forge('array/array_sample6');
		return Response::forge($view);
	}
	public function action_arraysample7(){
		$view = View::forge('array/array_sample7');
		return Response::forge($view);
	}
	public function action_arraysample8(){
		$view = View::forge('array/array_sample8');
		return Response::forge($view);
	}
	public function action_arraysample9(){
		$view = View::forge('array/array_sample9');
		return Response::forge($view);
	}
	public function action_arraysample10(){
		$view = View::forge('array/array_sample10');
		return Response::forge($view);
	}
	public function action_arraysample11(){
		$view = View::forge('array/array_sample11');
		return Response::forge($view);
	}

}