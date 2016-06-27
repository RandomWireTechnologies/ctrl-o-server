<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use IPN;

class PaypalController extends Controller
{

    public function ipn()
    {
        $order = IPN::getOrder();
    }
}

?>
