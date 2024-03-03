<?php

namespace App\Listeners\User;

use App\Core\Events\Event;
use App\Core\Events\Listener;

class SendWelcomeEmail extends Listener {

	public function handle( Event $event ) {
		echo 'Sending Welcome message to ' . $event->user->email . '<br>';
	}
}