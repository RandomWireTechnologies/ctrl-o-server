<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use IPN;
use PayPal\Api\Plan;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaypalController extends Controller
{

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                env('PAYPAL_ID'),
                env('PAYPAL_SECRET')
            )
        );
        $this->apiContext->setConfig(
            array(
                'mode' => 'sandbox',
                'log.LogEnabled' => true,
                'log.FileName' => '../PayPal.log',
                'log.LogLevel' => 'DEBUG', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
                'cache.enabled' => true,
                // 'http.CURLOPT_CONNECTTIMEOUT' => 30
                // 'http.headers.PayPal-Partner-Attribution-Id' => '123123123'
                //'log.AdapterFactory' => '\PayPal\Log\DefaultLogFactory' // Factory class implementing \PayPal\Log\PayPalLogFactory
            )
        );
    }


    public function ipn()
    {
        $order = IPN::getOrder();
    }

    public function listSubscriptions()
    {
        $subscriptions = array();
        $subscription_raw = "Raw not set";

        try {
            // Get the list of all plans
            // You can modify different params to change the return list.
            // The explanation about each pagination information could be found here
            // at https://developer.paypal.com/webapps/developer/docs/api/#list-plans
            $params = array('page_size' => '2','status' => 'active');
            $planList = Plan::all($params, $this->apiContext);
            $subscriptions = $planList->getPlans();
            $subscription_raw = $planList->toJSON();
        } catch (Exception $ex) {
            $subscription_raw = "Exception $ex during plan retrieval";
        }
        // Stub to fill in later
        return view('paypal/listSubscriptions', compact('subscriptions','subscription_raw'));
    }

    public function getSubscription($id)
    {
        $subscription_raw = "Raw not set";

        try {
            // Get the list of all plans
            // You can modify different params to change the return list.
            // The explanation about each pagination information could be found here
            // at https://developer.paypal.com/webapps/developer/docs/api/#list-plans
            $subscription = Plan::get($id, $this->apiContext);
            $subscription_raw = $subscription->toJSON();
        } catch (Exception $ex) {
            $subscription_raw = "Exception $ex during plan retrieval";
        }
        // Stub to fill in later
        return view('paypal/showSubscription', compact('subscription','subscription_raw'));
    }
}

?>
