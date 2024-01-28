<?php

namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase {

	public function test_can_get_event_name() {
		$event = new EventStub();

		$this->assertEquals('EventStub', $event->getName());
	}
}