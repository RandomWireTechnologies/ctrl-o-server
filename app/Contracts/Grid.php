<?php

/**
 * app/Contracts/Grid.php
 *
 * Interface for grid services.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Contracts;

interface Grid {

	/**
	 * Get a listing of membership types for a grid select.
	 * 
	 * @return array
	 */
	public function membershipTypes();

	/**
	 * Get a listing of memberships for a grid select.
	 * 
	 * @return array
	 */
	public function memberships();

	/**
	 * Get a listing of membership subscriptions for a grid select.
	 * 
	 * @return array
	 */
	public function membershipSubscriptions();

	/**
	 * Get a listing of users for a grid select.
	 * 
	 * @return array
	 */
	public function users();
}
