<?php

/**
 * app/Controllers/Traits/DemoFeaturesTrait.php
 *
 * Features trait for supplemental demo methods.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Traits;

trait DemoFeaturesTrait
{
	/**
	 * Create an faq feature view.
	 * 
	 * @return Response
	 */
	public function featureFaq()
	{
		return view('demo.features.faq');
	}

	/**
	 * Create a userlist feature view.
	 * 
	 * @return Response
	 */
	public function featureUserlist()
	{
		return view('demo.features.userlist');
	}

	/**
	 * Create an invoice feature view.
	 * 
	 * @return Response
	 */
	public function featureInvoice()
	{
		return view('demo.features.invoice');
	}

	/**
	 * Create a blank feature view.
	 * 
	 * @return Response
	 */
	public function featureBlank()
	{
		bcs([
			'General Pages' => 'admin.index',
			'Blank'         => null
		]);
		
		return view('demo.features.blank');
	}

	/**
	 * Create a profile feature view.
	 * 
	 * @return Response
	 */
	public function featureProfile()
	{
		return view('demo.features.profile');
	}

	/**
	 * Create a search feature view.
	 * 
	 * @return Response
	 */
	public function featureSearch()
	{
		return view('demo.features.search');
	}

	/**
	 * Create a gallery feature view.
	 * 
	 * @return Response
	 */
	public function featureGallery()
	{
		return view('demo.features.gallery');
	}

	/**
	 * Create a gallery grid feature view.
	 * 
	 * @return Response
	 */
	public function featureGalleryGrid()
	{
		return view('demo.features.gallery-grid');
	}

	/**
	 * Create a 400 error feature view.
	 * 
	 * @return Response
	 */
	public function featureError400()
	{
		return view('demo.features.error-400');
	}

	/**
	 * Create a 403 error feature view.
	 * 
	 * @return Response
	 */
	public function featureError403()
	{
		return view('demo.features.error-403');
	}

	/**
	 * Create a 404 error feature view.
	 * 
	 * @return Response
	 */
	public function featureError404()
	{
		return view('demo.features.error-404');
	}

	/**
	 * Create a 405 error feature view.
	 * 
	 * @return Response
	 */
	public function featureError405()
	{
		return view('demo.features.error-405');
	}

	/**
	 * Create a 500 error feature view.
	 * 
	 * @return Response
	 */
	public function featureError500()
	{
		return view('demo.features.error-500');
	}

	/**
	 * Create a 503 error feature view.
	 * 
	 * @return Response
	 */
	public function featureError503()
	{
		return view('demo.features.error-503');
	}

	/**
	 * Create a maps feature view.
	 * 
	 * @return Response
	 */
	public function featureMaps()
	{
		return view('demo.features.maps');
	}

	/**
	 * Create a vector map feature view.
	 * 
	 * @return Response
	 */
	public function featureVectorMap()
	{
		return view('demo.features.vector-map');
	}

	/**
	 * Create a login feature view.
	 * 
	 * @return Response
	 */
	public function featureLogin()
	{
		return view('demo.features.login');
	}

	/**
	 * Create a v2 login feature view.
	 * 
	 * @return Response
	 */
	public function featureLoginV2()
	{
		return view('demo.features.login_v2');
	}

	/**
	 * Create a v3 login feature view.
	 * 
	 * @return Response
	 */
	public function featureLoginV3()
	{
		return view('demo.features.login_v3');
	}

	/**
	 * Create a register feature view.
	 * 
	 * @return Response
	 */
	public function featureRegister()
	{
		return view('demo.features.register');
	}

	/**
	 * Create a v2 register feature view.
	 * 
	 * @return Response
	 */
	public function featureRegisterV2()
	{
		return view('demo.features.register_v2');
	}

	/**
	 * Create a v3 register feature view.
	 * 
	 * @return Response
	 */
	public function featureRegisterV3()
	{
		return view('demo.features.register_v3');
	}

	/**
	 * Create a forgotten password feature view.
	 * 
	 * @return Response
	 */
	public function featureForgotPassword()
	{
		return view('demo.features.forgot_password');
	}

	/**
	 * Create a v2 forgotten password feature view.
	 * 
	 * @return Response
	 */
	public function featureForgotPasswordV2()
	{
		return view('demo.features.forgot_password_v2');
	}

	/**
	 * Create a lockscreen feature view.
	 * 
	 * @return Response
	 */
	public function featureLockscreen()
	{
		return view('demo.features.lockscreen');
	}

	/**
	 * Create a v2 lockscreen feature view.
	 * 
	 * @return Response
	 */
	public function featureLockscreenV2()
	{
		return view('demo.features.lockscreen_v2');
	}

	/**
	 * Create a maintenance feature view.
	 * 
	 * @return Response
	 */
	public function featureMaintenance()
	{
		return view('demo.features.maintenance');
	}

	/**
	 * Create an email feature view.
	 * 
	 * @return Response
	 */
	public function featureEmail()
	{
		return view('demo.features.email');
	}

	/**
	 * Create a contacts feature view.
	 * 
	 * @return Response
	 */
	public function featureContacts()
	{
		return view('demo.features.contacts');
	}

	/**
	 * Create a calendar feature view.
	 * 
	 * @return Response
	 */
	public function featureCalendar()
	{
		return view('demo.features.calendar');
	}

	/**
	 * Create a project feature view.
	 * 
	 * @return Response
	 */
	public function featureProject()
	{
		return view('demo.features.project');
	}

	/**
	 * Create a mailbox feature view.
	 * 
	 * @return Response
	 */
	public function featureMailbox()
	{
		return view('demo.features.mailbox');
	}

	/**
	 * Create a message feature view.
	 * 
	 * @return Response
	 */
	public function featureMessage()
	{
		return view('demo.features.message');
	}

	/**
	 * Create a media feature view.
	 * 
	 * @return Response
	 */
	public function featureMedia()
	{
		return view('demo.features.media');
	}
}
