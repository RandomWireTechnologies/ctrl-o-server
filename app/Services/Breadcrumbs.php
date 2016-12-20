<?php

/**
 * app/Services/Breadcrumbs.php
 *
 * Breadcrumbs concrete for breadcrumbs service provider.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Services;

class Breadcrumbs
{
	/**
	 * Breadcrumbs
	 * 
	 * @var array
	 */
	protected $breadcrumbs = [];

	/**
	 * Add a new breadcrumb to the stack.
	 * 
	 * @param string $text
	 * @param string $route
	 */
	public function add($text, $route = null)
	{
		$this->breadcrumbs[] = [
			'text'  => $text,
			'route' => ! is_null($route) ? $route : 'last'
		];
	}

	/**
	 * Return the breadcrumbs array.
	 * 
	 * @return array breadcrumbs
	 */
	public function render()
	{
		return $this->breadcrumbs;
	}
}
