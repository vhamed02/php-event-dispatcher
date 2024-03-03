<?php

namespace App\Models;

class User {

	public $id;
	public $email;
	private $credit;

	public function addCredit( $amount ) {
		$this->credit += $amount;
	}

	public function getCredit() {
		return $this->credit;
	}
}