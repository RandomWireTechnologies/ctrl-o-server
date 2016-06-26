<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaypalController extends Controller
{

    public function ipn()
    {
        $order = IPN::getOrder();
    }
}

?>