<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stripe | <?php echo get_settings('site_name');?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url('assets/frontend/flixer/stripe.css');?>"
            rel="stylesheet">
        <link name="favicon" type="image/x-icon" href="<?php echo base_url('assets/global/favicon.png');?>" rel="shortcut icon" />
    </head>
    <body>
<!--required for getting the stripe token-->
        <?php
            $stripe_keys = get_settings('stripe_keys');
            $values = json_decode($stripe_keys);
            if ($values[0]->testmode == 'on') {
                $public_key = $values[0]->public_key;
                $private_key = $values[0]->secret_key;
            } else {
                $public_key = $values[0]->public_live_key;
                $private_key = $values[0]->secret_live_key;
            }
        ?>

        <script>
            var stripe_key = '<?php echo $public_key;?>';
        </script>

<!--required for getting the stripe token-->

          <img src="<?php echo base_url('assets/global/logo.png'); ?>" width="25%;"
             style="opacity: 0.05;">
             <?php $price = $this->db->get_where('plan', array('plan_id' => $plan_id))->row('price'); ?>
          <form method="post"
            action="<?php echo base_url('index.php?payment/payment_success/stripe/' . $user_id.'/'.$plan_id.'/'.$price);?>">
            <label>
                <div id="card-element" class="field is-empty"></div>
                <span><span><?php echo get_phrase('credit_/_debit_card');?></span></span>
            </label>
            <button type="submit">
                <?php echo get_phrase('pay');?> <?php echo $this->db->get_where('plan', array('plan_id' => $plan_id))->row('price').' '.get_settings('stripe_currency');?>
            </button>
            <div class="outcome">
                <div class="error" role="alert"></div>
                <div class="success">
                  Success! Your Stripe token is <span class="token"></span>
                </div>
            </div>
            <div class="package-details">
                <strong><?php echo get_phrase('Name');?> | <?php echo $this->db->get_where('user', array('user_id' => $user_id))->row('name'); ?></strong> <br>
            </div>
            <input type="hidden" name="stripeToken" value="">
          </form>
        <img src="https://stripe.com/img/about/logos/logos/blue.png" width="25%;" style="opacity: 0.05;">
        <script src="https://js.stripe.com/v3/"></script>
        <script src="<?php echo base_url('assets/frontend/flixer/stripe.js');?>"></script>

        <script type="text/javascript">
            get_stripe_currency('<?php echo get_settings('stripe_currency'); ?>');
        </script>

    </body>
</html>
