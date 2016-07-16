<?php

use App\Card;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CardTest extends TestCase
{
	use DatabaseTransactions;

	public function setUp()
	{
		parent::setUp();

		$this->user = factory(User::class)->create();
		$this->card = factory(Card::class)->create(['user_id' => $this->user->id]);
	}


	/** @test */
	function aCardHasAnOwner()
	{
		$this->assertEquals($this->card->user_id, $this->user->id);
		$this->assertEquals($this->card->user->id,$this->user->id);
	}

	/** @test */
	function aCardHasName()
	{
		$card = factory(Card::class)->create(['name' => 'A new card']);
		$this->assertEquals('A new card', $card->name);
	}

	/** @test */
	function aCardHasASerial()
	{
		$card = factory(Card::class)->create(['serial' => 'deadbeef']);
		$this->assertEquals('deadbeef', $card->serial);
	}

	function aCardHasAHash()
	{
		$this->assertNotNull($this->card->hash);
	}
}