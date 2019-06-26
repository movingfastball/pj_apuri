<?php

namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController{

	public function index(){
		$this->viewBuilder()->autoLayout(false);
		$this->set('grap','Hmememe!');
		$this->set('grap2','This isdd mdfdfdf!');
	}
}