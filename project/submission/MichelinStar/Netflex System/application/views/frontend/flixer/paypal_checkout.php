<!DOCTYPE html>
<html lang="en">
<head>
    <title>Paypal | <?php echo get_settings('site_name');?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/frontend/flixer/stripe.css');?>"
            rel="stylesheet">
    <link name="favicon" type="image/x-icon" href="<?php echo base_url('assets/global/favicon.png');?>" rel="shortcut icon" />
</head>
<body>

<?php
    $paypal_keys = get_settings('paypal');
    $paypal = json_decode($paypal_keys);
?>
<!--required for getting the stripe token-->

<img src="<?php echo base_url('assets/global/logo.png'); ?>" width="25%;"
             style="opacity: 0.05;">

<div class="package-details">
    <?php $amount_to_pay = $this->db->get_where('plan', array('plan_id' => $plan_id))->row('price'); ?>
    <strong><?php echo get_phrase('name');?> | <?php echo $this->db->get_where('user', array('user_id' => $user_id))->row('name'); ?></strong> <br>
    <strong><?php echo get_phrase('pay');?> | <?php echo $amount_to_pay;?> <?php echo get_settings('paypal_currency'); ?></strong> <br>
    <div id="paypal-button" style="margin-top: 20px;"></div><br>
</div>

<img src="https://www.paypalobjects.com/webstatic/i/logo/rebrand/ppcom-white.svg" width="25%;"
     style="opacity: 0.05;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
        env: '<?php echo $paypal[0]->mode;?>', // 'sandbox' or 'production'
        style: {
            label: 'paypal',
            size:  'medium',    // small | medium | large | responsive
            shape: 'rect',     // pill | rect
            color: 'blue',     // gold | blue | silver | black
            tagline: false
        },
        client: {
            sandbox:    '<?php echo $paypal[0]->sandbox_client_id;?>',
            production: '<?php echo $paypal[0]->production_client_id;?>'
        },

        commit: true, // Show a 'Pay Now' button

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: "<?php echo $amount_to_pay; ?>", currency: "<?php echo get_settings('paypal_currency'); ?>" }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            // executes the payment
            return actions.payment.execute().then(function() {
                //make an ajax call for saving the payment info
                $.ajax({
                   url: '<?php echo base_url('index.php?payment/payment_success/paypal/'.$user_id.'/'.$plan_id);?>'
                }).done(function () {
                    window.location = '<?php echo base_url('index.php?browse/youraccount');?>';
                });
            });
        }

    }, '#paypal-button');
</script>

</body>
</html>
