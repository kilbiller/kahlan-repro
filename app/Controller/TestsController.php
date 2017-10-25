<?php

namespace Invityou\Controller;

use Cake\Controller\Controller;

class TestsController extends Controller {

	public function index() {
		return $this->Test->find('all');
	}

}
