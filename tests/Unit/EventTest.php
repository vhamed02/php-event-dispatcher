<?php

namespace App\Tests\Unit;

use App\Stubs\EventStubNoName;
use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase {

	public function test_can_get_event_name() {
		$event = new EventStub();

		$this->assertEquals('UserSignedUp', $event->getName());
	}

	public function test_it_defaults_to_an_event_name_to_the_class_name() {
		$event = new EventStubNoName();

		$this->assertEquals('EventStubNoName', $event->getName());
	}
}