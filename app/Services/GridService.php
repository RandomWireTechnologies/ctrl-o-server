<?php

/**
 * app/Services/GridService.php
 *
 * Concrete class for various grid service methods.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Services;

use CtrlServer\Models\User;
use CtrlServer\Contracts\Grid;
use CtrlServer\Models\Membership;
use CtrlServer\Models\MembershipType;
use CtrlServer\Models\MembershipCredit;
use CtrlServer\Models\MembershipSubscription;

class GridService implements Grid
{
	/**
	 * Get a listing of membership types for a grid select.
	 * 
	 * @return array
	 */
	public function membershipTypes()
	{
		$types = MembershipType::all();

		$data['list'] = $types->pluck('name', 'id');

		$data['fields'] = [
			0 => [
				'membershiptype_id' => 0,
				'name'              => '-- Select to Filter --'
			]
		];

		foreach ($types as $type) {
			$item = [
				'membershiptype_id' => $type->id,
				'name'              => $type->name
			];

			$data['fields'][] = $item;
		}

		return $data;
	}

	/**
	 * Get a listing of memberships for a grid select.
	 * 
	 * @return array
	 */
	public function memberships()
	{
		$types = Membership::all();

		$data['list'] = $types->pluck('name', 'id');

		$data['fields'] = [
			0 => [
				'membership_id' => 0,
				'name'          => '-- Select to Filter --'
			]
		];

		foreach ($types as $type) {
			$item = [
				'membership_id' => $type->id,
				'name'          => $type->name
			];

			$data['fields'][] = $item;
		}

		return $data;
	}

	/**
	 * Get a listing of membership subscriptions for a grid select.
	 * 
	 * @return array
	 */
	public function membershipSubscriptions()
	{
		$types = MembershipSubscription::all();

		$data['list'] = $types->pluck('name', 'id');

		$data['fields'] = [
			0 => [
				'membership_subscription_id' => 0,
				'name'                       => '-- Select to Filter --'
			]
		];

		foreach ($types as $type) {
			$item = [
				'membership_subscription_id' => $type->id,
				'name'                       => $type->name
			];

			$data['fields'][] = $item;
		}

		return $data;
	}

	/**
	 * Get a listing of users for a grid select.
	 * 
	 * @return array
	 */
	public function users()
	{
		$types = User::all();

		$data['list'] = $types->pluck('name', 'id');

		$data['fields'] = [
			0 => [
				'user_id'  => 0,
				'name'     => '-- Select to Filter --'
			]
		];

		foreach ($types as $type) {
			$item = [
				'user_id'  => $type->id,
				'name'     => $type->name
			];

			$data['fields'][] = $item;
		}

		return $data;
	}
}
