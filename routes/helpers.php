<?php

/**
 * routes/helpers.php
 *
 * Various global helper functions to make things fun and easy.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

if (! function_exists('bcs')) 
{
	/**
	 * Return the breadcrumb instance from the container
	 * or push new crumbs to instance.
	 * 
	 * @param  string|array $text
	 * @param  string $route
	 * @return \CtrlServer\Services\Breadcrumbs|void
	 */
	function bcs($text = null, $route = null) 
	{
		// If nothing is passed return the object.
		if (is_null($text) && is_null($route)) {
			return app('breadcrumb');
		}

		// Array passed, parse it and return.
		if (is_array($text)) {
			foreach ($text as $key => $value) {
				if (is_null($value)) {
					app('breadcrumb')->add($key);
				} else {
					app('breadcrumb')->add($key, $value);
				}
			}

			return;
		}

		// No route
		if (is_null($route)) {
			return app('breadcrumb')->add($text);
		}

		// Normal single add
		app('breadcrumb')->add($text, $route);
	}
}

if (! function_exists('firstname')) {

	/**
	 * Since we only have a full name value, let's
	 * create a function to return just the user's first name.
	 * 
	 * @param  \CtrlServer\Models\User $user
	 * @return string
	 */
	function firstname(\CtrlServer\Models\User $user)
	{
		$nodes = explode(' ', $user->name);

		return $nodes[0];
	}
}

if (! function_exists('lastname')) {

	/**
	 * Since we only have a full name value, let's
	 * create a function to return just the user's last name.
	 * 
	 * @param  \CtrlServer\Models\User $user
	 * @return string
	 */
	function lastname(\CtrlServer\Models\User $user)
	{
		$nodes = explode(' ', $user->name);

		return $nodes[1];
	}
}

if (! function_exists('encode')) {

	/**
	 * JSON encode an item.
	 * 
	 * @param  mixed $item
	 * @return object
	 */
	function encode($item)
	{
		return json_encode($item);
	}
}

if (! function_exists('decode')) {

	/**
	 * JSON decode and item.
	 * 
	 * @param  mixed  $item
	 * @param  boolean $array
	 * @return object|array
	 */
	function decode($item, $array = TRUE)
	{
		return json_decode($item, $array);
	}
}

if (! function_exists('dec_enc')) {

	/**
	 * Create an object from an array using JSON.
	 * 
	 * @param  mixed $item
	 * @return object
	 */
	function dec_enc($item)
	{
		return json_decode(json_encode($item), FALSE);
	}
}
