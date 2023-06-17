<?php
$paypal_settings = $this->db->get_where('settings', array('type' => 'paypal'))->row()->description;
$paypal = json_decode($paypal_settings);
$stripe_settings = $this->db->get_where('settings', array('type' => 'stripe_keys'))->row()->description;
$stripe = json_decode($stripe_settings);
?>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('system_currency'); ?>
                </div>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url('index.php?admin/payment_settings/system_currency'); ?>">
                    <div class="form-group">
                        <label for="name"><?php echo get_phrase('select_system_currency');?></label>
                        <select class="form-control select2" id="source" name="system_currency" required>
                            <option value=""><?php echo get_phrase('select_system_currency'); ?></option>
                            <?php
                            $currencies = $this->crud_model->get_currencies();
                            foreach ($currencies as $currency):?>
                            <option value="<?php echo $currency['code'];?>"
                                <?php if (get_settings('system_currency') == $currency['code'])echo 'selected';?>> <?php echo $currency['code'];?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('select_system_currency');?></label>
                    <select class="form-control select2" id="source" name="currency_position" data-init-plugin="select2" >
                        <option value="left" <?php if (get_settings('currency_position') == 'left') echo 'selected';?> ><?php echo get_phrase('left'); ?></option>
                        <option value="right" <?php if (get_settings('currency_position') == 'right') echo 'selected';?> ><?php echo get_phrase('right'); ?></option>
                        <option value="left-space" <?php if (get_settings('currency_position') == 'left-space') echo 'selected';?> ><?php echo get_phrase('left_with_a_space'); ?></option>
                        <option value="right-space" <?php if (get_settings('currency_position') == 'right-space') echo 'selected';?> ><?php echo get_phrase('right_with_a_space'); ?></option>
                    </select>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary mt-2"><?php echo get_phrase('update_system_currency'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <hr>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">
                <?php echo get_phrase('paypal_settings'); ?>
            </div>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url('index.php?admin/payment_settings/paypal'); ?>">
                <div class="form-group">
                    <label for="name">active</label>
                    <select class="form-control select2" id="source" name="paypal_active" data-init-plugin="select2" >
                        <option value="0"
                        <?php if ($paypal[0]->active == 0) echo 'selected';?>>
                        <?php echo get_phrase('no');?></option>
                        <option value="1"
                        <?php if ($paypal[0]->active == 1) echo 'selected';?>>
                        <?php echo get_phrase('yes');?></option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Mode</label>
                    <select class="form-control select2" id="source" name="paypal_mode" data-init-plugin="select2" >
                        <option value="sandbox"
                        <?php if ($paypal[0]->mode == 'sandbox') echo 'selected';?>>
                        <?php echo get_phrase('sandbox');?></option>
                        <option value="production"
                        <?php if ($paypal[0]->mode == 'production') echo 'selected';?>>
                        <?php echo get_phrase('production');?></option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('sandbox_client_id'); ?></label>
                    <input type="text" class="form-control" name="sandbox_client_id" value="<?php echo $paypal[0]->sandbox_client_id;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('sandbox_secret_key'); ?></label>
                    <input type="text" class="form-control" name="sandbox_secret_key" value="<?php echo $paypal[0]->sandbox_secret_key;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('production_client_id'); ?></label>
                    <input type="text" class="form-control" name="production_client_id" value="<?php echo $paypal[0]->production_client_id;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('production_secret_key'); ?></label>
                    <input type="text" class="form-control" name="production_secret_key" value="<?php echo $paypal[0]->production_secret_key;?>"  />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('paypal_currency');?></label>
                    <select class="form-control select2" id="paypal_currency" name="paypal_currency" data-init-plugin="select2"  required>
                        <option value=""><?php echo get_phrase('select_paypal_currency'); ?></option>
                        <?php
                        $currencies = $this->crud_model->get_paypal_supported_currencies();
                        foreach ($currencies as $currency):?>
                        <option value="<?php echo $currency['code'];?>"
                            <?php if (get_settings('paypal_currency') == $currency['code'])echo 'selected';?>> <?php echo $currency['code'];?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary mt-2">Update Paypal Settings</button>
            </div>
        </form>
    </div>
</div>

<hr>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">
            <?php echo get_phrase('stripe_settings'); ?>
        </div>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php echo base_url('index.php?admin/payment_settings/stripe'); ?>">
            <div class="form-group">
                <label for="name"><?php echo get_phrase('active');?></label>
                <select class="form-control select2" id="source" name="stripe_active" data-init-plugin="select2" >
                    <option value="0"
                    <?php if ($stripe[0]->active == 0) echo 'selected';?>>
                    <?php echo get_phrase('no');?></option>
                    <option value="1"
                    <?php if ($stripe[0]->active == 1) echo 'selected';?>>
                    <?php echo get_phrase('yes');?></option>

                </select>
            </div>

            <div class="form-group">
                <label for="name"><?php echo get_phrase('testmode');?></label>
                <select class="form-control select2" id="source" name="testmode" data-init-plugin="select2" >
                    <option value="on"
                    <?php if ($stripe[0]->testmode == 'on') echo 'selected';?>>
                    <?php echo get_phrase('on');?></option>
                    <option value="off"
                    <?php if ($stripe[0]->testmode == 'off') echo 'selected';?>>
                    <?php echo get_phrase('off');?></option>
                </select>
            </div>

            <div class="form-group">
                <label for="name"><?php echo get_phrase('test_secret_key');?></label>
                <input type="text" class="form-control" name="secret_key" value="<?php echo $stripe[0]->secret_key;?>"  />
            </div>

            <div class="form-group">
                <label for="name"><?php echo get_phrase('test_public_key');?></label>
                <input type="text" class="form-control" name="public_key" value="<?php echo $stripe[0]->public_key;?>"  />
            </div>

            <div class="form-group">
                <label for="name"><?php echo get_phrase('live_secret_key');?></label>
                <input type="text" class="form-control" name="secret_live_key" value="<?php echo $stripe[0]->secret_live_key;?>"  />
            </div>

            <div class="form-group">
                <label for="name"><?php echo get_phrase('live_public_key');?></label>
                <input type="text" class="form-control" name="public_live_key" value="<?php echo $stripe[0]->public_live_key;?>"  />
            </div>

            <div class="form-group">
                <label for="name"><?php echo get_phrase('stripe_currency');?></label>
                <select class="form-control selectboxit" id="source" name="stripe_currency" data-init-plugin="select2">
                    <option value=""><?php echo get_phrase('select_stripe_currency'); ?></option>
                    <?php
                    $currencies = $this->crud_model->get_stripe_supported_currencies();
                    foreach ($currencies as $currency):?>
                    <option value="<?php echo $currency['code'];?>"
                        <?php if (get_settings('stripe_currency') == $currency['code'])echo 'selected';?>> <?php echo $currency['code'];?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mt-2">Update Stripe Settings</button>
        </div>
    </form>
</div>
</div>


<!-- paytm  -->
<?php
if (addon_status('paytm') == 1):
    $paytm_settings = $this->db->get_where('settings', array('type' => 'paytm_keys'))->row()->description;
    $paytm = json_decode($paytm_settings);
    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">
                <?php echo get_phrase('paytm_settings'); ?>
            </div>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url('index.php?addons/paytm/settings'); ?>">
                <div class="form-group">
                    <label for="name"><?php echo get_phrase('PAYTM_MODE'); ?></label>
                    <select class="form-control select2" id="PAYTM_MODE" name="PAYTM_MODE" data-init-plugin="select2" >
                        <option value="">Production</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('PAYTM_MERCHANT_KEY');?></label>
                    <input type="text" class="form-control" name="PAYTM_MERCHANT_KEY" value="<?php echo $paytm[0]->PAYTM_MERCHANT_KEY;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('PAYTM_MERCHANT_MID');?></label>
                    <input type="text" class="form-control" name="PAYTM_MERCHANT_MID" value="<?php echo $paytm[0]->PAYTM_MERCHANT_MID;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('PAYTM_MERCHANT_WEBSITE');?></label>
                    <input type="text" class="form-control" name="PAYTM_MERCHANT_WEBSITE" value="<?php echo $paytm[0]->PAYTM_MERCHANT_WEBSITE;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('INDUSTRY_TYPE_ID');?></label>
                    <input type="text" class="form-control" name="INDUSTRY_TYPE_ID" value="<?php echo $paytm[0]->INDUSTRY_TYPE_ID;?>"  />
                </div>

                <div class="form-group">
                    <label for="name"><?php echo get_phrase('CHANNEL_ID');?></label>
                    <input type="text" class="form-control" name="CHANNEL_ID" value="<?php echo $paytm[0]->CHANNEL_ID;?>"  />
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary mt-2">Update Paytm Settings</button>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
    <div class="alert alert-info"><strong><?php echo get_phrase('heads_up') ?>! </strong> <?php echo get_phrase('please_make_sure_that').' "'.get_phrase('system_currency').'", '.'"'.get_phrase('paypal_currency').'" and '.'"'.get_phrase('stripe_currency').'" '.get_phrase('are_same'); ?>.</div>
</div>
</div>
