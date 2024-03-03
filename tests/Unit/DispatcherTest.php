<?php

namespace App\Tests\Unit;

use App\Core\Events\Dispatcher;
use App\Stubs\EventStubNoName;
use App\Stubs\ListenerStub;
use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase {

	/** @test **/
	public function it_hold_listeners_to_an_array(  ) {
		$dispatcher = new Dispatcher();

		$this->assertEmpty($dispatcher->getListeners());
		$this->assertIsArray($dispatcher->getListeners());
	}


	public function test_it_can_add_listener(  ) {
		$dispatcher = new Dispatcher();

		$dispatcher->addListener('UserSignedUp', new ListenerStub());

		$this->assertCount(1, $dispatcher->getListeners()['UserSignedUp']);
	}

	public function test_it_can_get_listeners_by_event_name(  ) {
		$dispatcher = new Dispatcher();

		$dispatcher->addListener('UserSignedUp', new ListenerStub());

		$this->assertCount(1, $dispatcher->getListenersByEvent('UserSignedUp'));
	}

	public function test_it_returns_an_empty_array_if_there_is_no_listeners_registered(  ) {

		$dispatcher = new Dispatcher();

		$this->assertCount(0, $dispatcher->getListenersByEvent('UserSignedUp'));

	}
}