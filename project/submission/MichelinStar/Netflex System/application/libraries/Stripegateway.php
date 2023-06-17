<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include('stripe/init.php');

class Stripegateway {

    public function __construct() {

    }

    public function checkout($data) {
    	
		$stripe_secret_key	=	$data['stripe_secret_key'];
		\stripe\Stripe::setApiKey($stripe_secret_key);
        try {
            $charge = \stripe\Charge::create(array(
                'source'    => $data['stripe_token'],
                'amount'    => $data['amount'],
                'currency'  => 'usd',
                'description' => $data['description']
            ));
        } catch (Exception $e) {
            //print($e);
        }

    }

}