<?php

namespace App\Listeners\User;

use App\Core\Events\Event;
use App\Core\Events\Listener;

class AddBonusToUserWallet extends Listener {

	public function handle( Event $event ) {
		$event->user->addCredit(32);
		echo 'Added Bonus to user. New credit:$' . $event->user->getCredit() . '<br>';
	}
}