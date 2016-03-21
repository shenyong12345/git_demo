<?php

namespace Home\Controller;

use Think\Controller;
use Think\Model;

class IndexController extends Controller {
	public function index() {
		$this->show ( 'index' );
	}
	public function test123() {
		echo 'test123';
	}
}