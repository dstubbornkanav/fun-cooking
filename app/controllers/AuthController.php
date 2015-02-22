<?php

class AuthController extends BaseController {
	public function doLogin(){
		$credentials = [
			'username'    => 'd.stubborn.kanav',
			'password' => '123456'
		];
		Auth::logout();
		//var_dump(Auth::attempt($credentials));
		echo "<pre>";
		print_r(Auth::user());
	}
}