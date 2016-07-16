<?php

// use App\Card;
// use App\User;
// use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaypalManageSubscriptions extends TestCase
{
	// use DatabaseTransactions;
	use WithoutMiddleware;

	public function setUp()
	{
		parent::setUp();
	}


	/** @test */
	function page_exists()
	{
		$this->visit("/paypal/subscriptions")
			->see("Paypal Subscriptions");
	}

	// /** @test */
	// function add_subscription_button_works()
	// {
	// 	$this->visit("/paypal/subscriptions")
	// 		->click("Add Subscription")
	// 		->see("Add New Subscription");
	// }


}