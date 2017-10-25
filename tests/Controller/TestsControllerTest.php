<?php

use Invityou\Controller\TestsController;
use Cake\Network\CakeRequest;
use Cake\Network\CakeResponse;

describe('TestsController', function () {
	beforeEach(function () {
		$request = new CakeRequest();
		$response = new CakeResponse();
		$this->TestsController = new TestsController($request, $response);
		$this->TestsController->constructClasses();
	});

	describe('index', function () {
		it('should return an array', function () {
			allow($this->TestsController->Test)->toReceive('find')->andReturn([]);

			$res = $this->TestsController->index();

			expect($res)->toBe([]);
		});
	});
});
