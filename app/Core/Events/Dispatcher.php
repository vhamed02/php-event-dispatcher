<?php

namespace App\Core\Events;

use App\Stubs\ListenerStub;

class Dispatcher {
	protected $listeners = [];

	public function getListeners() {
		return $this->listeners;
	}

	public function addListener( $name, Listener $listener ) {
		$this->listeners[ $name ][] = $listener;
	}

	public function getListenersByEvent( $name ) {
		if ( ! isset( $this->listeners[ $name ] ) ) {
			return [];
		}

		return $this->listeners[ $name ];
	}

	public function dispatch( Event $event) {
		foreach ($this->getListenersByEvent($event->getName()) as $listener) {
			$listener->handle($event);
		}
	}
}