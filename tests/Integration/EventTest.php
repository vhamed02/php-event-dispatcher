<?php

namespace App\Tests\Integration;

use App\Core\Events\Dispatcher;
use App\Stubs\EventStubNoName;
use App\Stubs\ListenerStub;
use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase {

	/** @test */
	public function it_can_dispatch_an_event() {
		$dispatcher   = new Dispatcher();
		$event        = new EventStub();
		$mockListener = $this->createMock( ListenerStub::class );

		$mockListener->expects( $this->once() )->method( 'handle' )->with( $event );

		$dispatcher->addListener( 'UserSignedUp', $mockListener );
		$dispatcher->dispatch( $event );
	}
}