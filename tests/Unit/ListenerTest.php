<?php

namespace App\Tests\Unit;

use App\Stubs\EventStubNoName;
use App\Stubs\ListenerStub;
use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class ListenerTest extends TestCase {


	/** @test **/
	public function throws_an_exception_if_invalid_event_given() {
		$this->expectException( \TypeError::class );
		$listener = new ListenerStub();
		$listener->handle( 'not an event!' );
	}

	/** @test **/
	public function handle_method_accept_an_event() {
		$listener = new ListenerStub();
		$listener->handle( new EventStub() );
		$this->addToAssertionCount( 1 );
	}
}