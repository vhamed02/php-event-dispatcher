<?php

use App\Events\User\UserSignedUp;
use App\Listeners\User;
use App\Models\User as UserModel;

require 'vendor/autoload.php';

// user is signing up
$user        = new UserModel();
$user->id    = 1;
$user->email = 'vhamed02@gmail.com';

$dispatcher = new \App\Core\Events\Dispatcher();
$dispatcher->addListener( 'UserSignedUp', new User\SendWelcomeEmail() );
$dispatcher->addListener( 'UserSignedUp', new User\AddBonusToUserWallet() );

$dispatcher->dispatch( new UserSignedUp( $user ) );
