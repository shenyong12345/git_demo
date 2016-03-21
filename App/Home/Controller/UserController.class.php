<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class UserController extends Controller {
	public function index() {
		echo 'User index';
	}
	public function test($user, $pass) {
		echo 'user:' . $user . '<br />pass:' . $pass;
	}
	public function model() {
		$user = new Model ( 'user' );
		var_dump ( $user->select () );
		// $user=M('user');
		// var_dump($user->select());
		$condution = new \stdClass ();
	}
}