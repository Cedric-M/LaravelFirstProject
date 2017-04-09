<?php


namespace App\Http\Controllers;

class IndexController extends Controller{

	public function sayhello(){
		//return "Hello World from Controller (Wrong)!";
		return view('hello');
	}

	public function displayStore(){
		return view('store');
	}
}