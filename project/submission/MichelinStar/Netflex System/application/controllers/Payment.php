<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Payment extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('crud_model');
        $this->load->library('session');
    }

    public function paypal_checkout() {
        
        $plan_id  = $this->input->post('plan_id');
        $page_data['user_id']    = $this->session->userdata('user_id');
        $page_data['plan_id']   = $plan_id;
        $this->load->view('frontend/flixer/paypal_checkout', $page_data);
    }

    public function stripe_checkout() {
        
        $plan_id  = $this->input->post('plan_id');
        $page_data['user_id']    = $this->session->userdata('user_id');
        $page_data['plan_id']   = $plan_id;
        $this->load->view('frontend/flixer/stripe_checkout', $page_data);
    }

    public function payment_success($method = "", $user_id = "", $plan_id = "") {        
        $user_details = $this->db->get_where('user', array('user_id' => $user_id))->row_array();
        $plan = $this->db->get_where('plan', array('plan_id' => $plan_id))->row_array();
        if($method == 'stripe'){
            $stripe_keys = get_settings('stripe_keys');
            $values = json_decode($stripe_keys);
            if ($values[0]->testmode == 'on') {
                $public_key = $values[0]->public_key;
                $secret_key = $values[0]->secret_key;
            } else {
                $public_key = $values[0]->public_live_key;
                $secret_key = $values[0]->secret_live_key;
            }

            $token_id = $this->input->post('stripeToken');

            require_once(APPPATH.'libraries/Stripe/init.php');
            \Stripe\Stripe::setApiKey($secret_key);

            $customer = \Stripe\Customer::create(array(
                'email' => $user_details['email'], // client email id
                'card'  => $token_id
            ));

            $charge = \Stripe\Charge::create(['customer'  => $customer->id, 'amount' => $plan['price']*100, 'currency' => get_settings('stripe_currency'), 'receipt_email' => $user_details['email']]);

            if($charge->status == 'succeeded'){
                $user = $this->db->get_where('user', array('user_id' => $user_id))->row_array();
                $plan = $this->db->get_where('plan', array('plan_id' => $plan_id))->row_array();

                $data['user_id']            = $user_id;
                $data['plan_id']            = $plan_id;
                $data['price_amount']       = $plan['price'];
                $data['paid_amount']        = $plan['price'];
                $data['currency']           = get_settings('stripe_currency');
                $data['payment_timestamp']  = strtotime(date("Y-m-d H:i:s"));
                $data['timestamp_from']     = strtotime(date("Y-m-d H:i:s"));
                $data['timestamp_to']       = strtotime('+30 days', $data['timestamp_from']);
                $data['payment_method']     = $method;
                $data['payment_details']    = $_POST['stripeToken'];
                $data['status']             = 1;
                $this->db->insert('subscription' , $data);
                $this->session->set_flashdata('flash_message', get_phrase('payment_success'));
            }else{
                $this->session->set_flashdata('error_message', get_phrase('payment_failed'));
            }
            redirect(base_url().'index.php?browse/youraccount' , 'refresh');
        }

        if($method == 'paypal'){
            $user = $this->db->get_where('user', array('user_id' => $user_id))->row_array();
            $plan = $this->db->get_where('plan', array('plan_id' => $plan_id))->row_array();

            $data['user_id']            = $user_id;
            $data['plan_id']            = $plan_id;
            $data['price_amount']       = $plan['price'];
            $data['paid_amount']        = $plan['price'];
            $data['currency']           = get_settings('paypal_currency');
            $data['payment_timestamp']  = strtotime(date("Y-m-d H:i:s"));
            $data['timestamp_from']     = strtotime(date("Y-m-d H:i:s"));
            $data['timestamp_to']       = strtotime('+30 days', $data['timestamp_from']);
            $data['payment_method']     = $method;
            $data['payment_details']    = $method;
            $data['status']             = 1;
            $this->db->insert('subscription' , $data);

            $this->session->set_flashdata('payment_status', 'success');
            echo 'success';
            //redirect(base_url().'index.php?browse/youraccount' , 'refresh');
        }
    }
}
