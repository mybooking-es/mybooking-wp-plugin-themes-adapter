<?php
  /**
   * The Template for showing the renting complete step - JS microtemplates
   *
   * This template can be overridden by copying it to yourtheme/mybooking-templates/mybooking-plugin-complete-tmpl.php
   *
   * @phpcs:disable PHPCompatibility.Miscellaneous.RemovedAlternativePHPTags.MaybeASPOpenTagFound
   * @phpcs:disable Generic.PHP.DisallowAlternativePHPTags.MaybeASPOpenTagFound
   * @phpcs:disable Generic.PHP.DisallowAlternativePHPTags.MaybeASPShortOpenTagFound
   */
?>
<!-- Existing customer / New customer -->
<script type="text/template" id="script_complete_complement">
  <div id="reservation_complement_container">
    <form name="mybooking_select_user_form">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="registered_customer" id="mybooking_engine_registered_customer" value="true" checked>
        <label class="form-check-label" for="registered_customer">
          <?php echo esc_html_x( "I'm a registered customer", 'login', 'mybooking-wp-plugin') ?>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="registered_customer" id="mybooking_engine_unregistered_customer" value="false">
        <label class="form-check-label" for="unregistered_customer">
          <?php echo esc_html_x( "I'm a new customer", 'login', 'mybooking-wp-plugin') ?>
        </label>
      </div>
    </form>
    <hr>
    <form name="mybooking_login_form" class="mybooking_login_form_element" autocomplete="off">
      <div class="form-group">
          <label for="mybooking_login_username"><?php echo esc_html_x( "Username or email", 'login', 'mybooking-wp-plugin') ?></label>
          <input type="text" name="username" class="form-control" id="mybooking_login_username" placeholder="<?php echo esc_html_x( "Enter username or email", 'login', 'mybooking-wp-plugin') ?>">
      </div>
      <div class="form-group">
          <label for="mybooking_login_password"><?php echo esc_html_x( "Password", 'login', 'mybooking-wp-plugin') ?></label>
          <input type="password" name="password" class="form-control" id="mybooking_login_password" placeholder="<?php echo esc_html_x( "Password", 'login', 'mybooking-wp-plugin') ?>">
      </div>
      <button type="submit" class="btn btn-primary"><?php echo esc_html_x( "Login", 'login', 'mybooking-wp-plugin') ?></button> 
      <div class="form-group mt-3">
        <p class="text-info mybooking_login_password_forgotten"><?php echo esc_html_x( "Forgot password?", 'login', 'mybooking-wp-plugin') ?></p>
      </div>           
    </form>
    <div class="mybooking_password_forgotten_container">
    </div>
    <hr class="mybooking_login_form_element">
  </div>
</script>

<!-- Password forgotten -->

<script type="text/template" id="script_password_forgotten">
<div class="row">
  <div class="col-lg-12">
    <p class="text-muted"><?php echo esc_html_x( "Please, fill the form with the username or email and send to reset your password", 'password_forgotten', 'mybooking-wp-plugin') ?></p>    
    <form name="mybooking_password_forgotten_form" autocomplete="off">
      <div class="form-group">
          <label for="mybooking_password_forgotten_username"><?php echo esc_html_x( "Username or email", 'password_forgotten', 'mybooking-wp-plugin') ?></label>
          <input type="text" name="username" class="form-control" id="mybooking_password_forgotten_username" placeholder="<?php echo esc_html_x( "Enter username or email", 'password_forgotten', 'mybooking-wp-plugin') ?>">
      </div>
      <button type="submit" class="btn btn-primary"><?php echo esc_html_x( "Send", 'password_forgotten', 'mybooking-wp-plugin') ?></button>      
    </form>
  </div>
</div>
</script> 

<script type="text/template" id="script_welcome_customer">
  <div class="alert alert-info">
    <p><%=i18next.t('common.welcomeConnectedUser', {name: user.full_name})%></p>
  </div>
</script>

<script type="text/template" id="script_create_account">

  <div class="form-group mybooking_rent_create_account_selector_container">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="create_customer_account" id="mybooking_engine_rent_create_customer_account" value="true" checked>
        <label class="form-check-label" for="registered_customer">
          <?php echo esc_html_x( "Create account and book a reservation", 'renting_complete_create_account', 'mybooking-wp-plugin') ?>
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="create_customer_account" id="mybooking_engine_rent_not_create_customer_account" value="false">
        <label class="form-check-label" for="unregistered_customer">
          <?php echo esc_html_x( "Only book a reservation", 'renting_complete_create_account', 'mybooking-wp-plugin') ?>
        </label>
      </div>    
  </div>
  <div class="form-group mybooking_rent_create_account_fields_container">
      <div class="form-group">
          <label for="account_password"><?php echo esc_html_x( 'Password', 'renting_complete_create_account', 'mybooking-wp-plugin') ?></label>
          <input type="password" class="form-control" name="account_password" id="account_password"  autocomplete="off" placeholder="<?php echo esc_attr_x( 'Password', 'renting_complete_create_account', 'mybooking-wp-plugin') ?>:" maxlength="20">
          <small class="form-text text-muted"><?php echo esc_html_x( "Password must contain upper case letter, lower case letter, digit and symbol (@ ! * - _)", 'renting_complete_create_account', 'mybooking-wp-plugin') ?></small>
      </div>
  </div>  

</script>


<!-- Product detail (#selected_product) -->

<script type="text/tpml" id="script_product_detail">
  <h4 class="is-size-4 has-text-weight-semibold has-text-grey"><?php echo MyBookingEngineContext::getInstance()->getProduct() ?></h4>
  <% for (var idx=0; idx<shopping_cart.items.length; idx++) { %>
    <p><%=shopping_cart.items[idx].item_description_customer_translation%> <span class="is-pulled-right"><%= configuration.formatCurrency(shopping_cart.items[idx].item_cost)%></span></p>
    <img src="<%=shopping_cart.items[idx].photo_medium%>"/>  
  <% } %>  

</script>

<!-- Extra representation -->

<script type="text/template" id="script_detailed_extra">
  <% if (extras.length > 0 ) { %>
    <h2>Extras</h4>
    <% for (var idx=0;idx<extras.length;idx++) { %>
      <% var extra = extras[idx]; %>
      <section class="hero <% if (idx % 2 == 0) { %>is-light<%}%>">
        <div class="hero-body">
          <div class="columns">
            <div class="column is-one-third">
              <label for="select<%=extra.code%>" class="is-size-5 has-text-weight-bold"><%=extra.name%></label>
              <% if (extra.photo_path != null) { %>
              <img src="<%=extra.photo_path%>"/>
              <% } %>
            </div>
            <div class="column is-one-third">
              <% if (extra.max_quantity > 1) { %>
                <div class="field is-grouped">
                  <button class="button is-primary btn-minus-extra" 
                          data-value="<%=extra.code%>"
                          data-max-quantity="<%=extra.max_quantity%>">-</button>           
                  <div class="field">
                    <div class="control">
                    <% value = (extrasInShoppingCart[extra.code]) ? extrasInShoppingCart[extra.code] : 0; %>
                    <input type="text" id="extra-<%=extra.code%>-quantity" 
                           class="has-text-centered" readonly size="3" value="<%=value%>"/>
                    </div>
                  </div>
                  <button class="button is-primary btn-plus-extra" 
                          data-value="<%=extra.code%>"
                          data-max-quantity="<%=extra.max_quantity%>">+</button>
                </div>
              <% } else { %>
                <input id="checkboxl<%=extra.code%>" type="checkbox" class="extra-checkbox" data-value="<%=extra.code%>" <% if (extrasInShoppingCart[extra.code] &&  extrasInShoppingCart[extra.code] > 0) { %> checked="checked" <% } %>>          
              <% } %>
            </div>
            <div class="column is-one-third">
              <p class="is-size-4 has-text-weight-bold"><%= configuration.formatCurrency(extra.unit_price)%></p>
            </div>  
          </div>
        </div>
      </div>
    </section>  
    <% } %>
  <% } %>
</script>

<!-- Reservation summary -->

<script type="text/tmpl" id="script_reservation_summary">

  <h2 class="h4" style="border-bottom: 1px solid #ddd"><?php echo esc_html_x( 'Reservation summary', 'renting_complete', 'mybooking-wp-plugin') ?></h2>

  <% for (var idx=0; idx<shopping_cart.items.length; idx++) { %>
  <div class="card">
    <img class="card-img-top" src="<%=shopping_cart.items[idx].photo_medium%>"
         alt="<%=shopping_cart.items[idx].item_description_customer_translation%>"
         style="display: block; margin: 0 auto">
    <div class="card-body">
      <p class="card-text text-center"><strong><%=shopping_cart.items[idx].item_description_customer_translation%></strong></p>
    </div>
  </div>
  <% } %>

  <hr>
  
  <h3 class="h5 font-weight-normal"><?php echo MyBookingEngineContext::getInstance()->getDeliveryDate() ?></h3>
  <p class="pb-2"><strong style="font-weight:600"><%=shopping_cart.date_from_full_format%></strong></p>
  
  <h3 class="h5 font-weight-normal"><?php echo MyBookingEngineContext::getInstance()->getCollectionDate() ?></h3>
  <p class="pb-2"><strong style="font-weight:600"><%=shopping_cart.date_from_full_format%></strong></p>

  <% if (shopping_cart.days > 0) { %>
    <h3 class="h5 font-weight-normal"><?php echo MyBookingEngineContext::getInstance()->getDuration() ?></h3>
    <p class="pb-2"><strong style="font-weight:600"><%=shopping_cart.days%></strong></p>
  <% } else { %>
    <h3 class="h5 font-weight-normal"><?php echo esc_html_x( 'hour(s)', 'renting_complete', 'mybooking-wp-plugin' ) ?></h3>
    <p class="pb-2"><strong style="font-weight:600"><%=shopping_cart.hours%></strong></p>  
  <% } %>
  <hr>

  <table class="table table-borderless">
    <tr>
      <td style="border:0"><span class="h4"><strong><?php echo MyBookingEngineContext::getInstance()->getProduct() ?></strong></span></td>
      <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(shopping_cart.item_cost)%></span></td>
    </tr>
    <tr>
      <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( 'Extras', 'renting_complete', 'mybooking-wp-plugin' ) ?></strong></span></td>
      <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(shopping_cart.extras_cost)%></span></td>
    </tr>
    <tr>
      <td style="border:0"><span class="h3"><?php echo esc_html_x( "Total", 'renting_complete', 'mybooking-wp-plugin' ) ?></span></td>
      <td style="border:0"><span class="h3 text-right" style="display:block; color:#af0000"><%= configuration.formatCurrency(shopping_cart.total_cost)%></span></td>
    </tr>
  </table>

</script>

<!-- Payment detail -->

<script type="text/tmpl" id="script_payment_detail">

    <%
       var paymentAmount = 0;
       var selectionOptions = 0;

       if (sales_process.can_request) {
         selectionOptions += 1;
       }

       if (sales_process.can_pay_on_delivery) {
         selectionOptions += 1;
       }

       if (sales_process.can_pay) {
         selectionOptions += 1;
         if (sales_process.can_pay_deposit) {
            paymentAmount = shopping_cart.booking_amount;
         }
         else {
            paymentAmount = shopping_cart.total_cost;
         }
       }
    %>

    <!-- Payment -->

    <% if (sales_process.can_pay) { %>
      <% if (sales_process.payment_methods.paypal_standard && sales_process.payment_methods.tpv_virtual) { %>
        <!-- The payment method will be selected later -->
        <input type="hidden" name="payment" value="none">
      <% } else if (sales_process.payment_methods.paypal_standard) { %>
        <!-- Fixed paypal standard -->
        <input type="hidden" name="payment" value="paypal_standard">
      <% } else  if (sales_process.payment_methods.tpv_virtual) { %>
        <!-- Fixed tpv -->
        <input type="hidden" name="payment" value="<%=sales_process.payment_methods.tpv_virtual%>">
      <% } %>
    <% } else { %>
      <input type="hidden" name="payment" value="none">
    <% } %>

    <% if (selectionOptions > 1) { %>
      <hr>
      <div class="row">
         <% if (sales_process.can_request) { %>
           <div class="form-group col-md-12">
             <label for="payments_paypal_standard">
              <input type="radio" name="complete_action" value="request_reservation" class="complete_action">&nbsp;<?php echo esc_html_x( 'Request reservation', 'renting_complete', 'mybooking-wp-plugin' ) ?>
             </label>
           </div>
         <% } %>
         <% if (sales_process.can_pay_on_delivery) { %>
           <div class="form-group col-md-12">
             <label for="payments_paypal_standard">
              <input type="radio" name="complete_action" value="pay_on_delivery" class="complete_action">&nbsp;<?php echo esc_html_x( 'Book now and pay on arrival', 'renting_complete', 'mybooking-wp-plugin' ) ?>
             </label>
           </div>
         <% } %>
         <% if (sales_process.can_pay) { %>
         <div class="form-group col-md-12">
           <label for="payments_paypal_standard">
            <input type="radio" name="complete_action" value="pay_now" class="complete_action">&nbsp;<?php echo esc_html_x( 'Book now and pay now', 'renting_complete', 'mybooking-wp-plugin' ) ?>
           </label>
         </div>
         <% } %>
      </div>
    <% } %>

    <!-- Request reservation -->

    <% if (sales_process.can_request) { %>
    <div id="request_reservation_container" <% if (selectionOptions > 1 || !sales_process.can_request) { %>style="display:none"<%}%>>

        <div class="border p-4" style="border: 1px solid #eee; padding: 10px">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="conditions_read_request_reservation">
                <input type="checkbox" id="conditions_read_request_reservation" name="conditions_read_request_reservation"
                style="width: 20px; height: 20px; border: 1px solid #eee; z-index:9999; appearance: checkbox; -webkit-appearance: checkbox; -moz-appearance: checkbox">&nbsp;
                  <?php if ( empty($args['terms_and_conditions']) ) { ?>
                    <?php echo esc_html_x( 'I have read and hereby accept the conditions of rental', 'renting_complete', 'mybooking-wp-plugin' ) ?>
                  <?php } else { ?>
                    <?php echo wp_kses_post ( sprintf( _x( 'I have read and hereby accept the <a href="%s" target="_blank">conditions</a> of rental',
                                                           'renting_complete', 'mybooking-wp-plugin' ),
                                                       $args['terms_and_conditions'] ) )?>
                  <?php } ?>
              </label>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-12">
              <button type="submit" class="btn btn-outline-dark"><?php echo esc_html_x( 'Request reservation', 'renting_complete', 'mybooking-wp-plugin' ) ?></button>
            </div>
          </div>
        </div>

    </div>
    <% } %>

    <% if (sales_process.can_pay) { %>

        <% if (sales_process.can_pay_on_delivery) { %>
        <!-- Pay on delivery -->
        <div id="payment_on_delivery_container" <% if (selectionOptions > 1 || !sales_process.can_pay_on_delivery) { %>style="display:none"<%}%>>

            <div class="border p-4" style="border: 1px solid #eee; padding: 10px">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="conditions_read_payment_on_delivery">
                      <input type="checkbox" id="conditions_read_payment_on_delivery" name="conditions_read_payment_on_delivery"
                      style="width: 20px; height: 20px; border: 1px solid #eee; z-index:9999; appearance: checkbox; -webkit-appearance: checkbox; -moz-appearance: checkbox">&nbsp;
                      <?php if ( empty($args['terms_and_conditions']) ) { ?>
                        <?php echo esc_html_x( 'I have read and hereby accept the conditions of rental', 'renting_complete', 'mybooking-wp-plugin' ) ?>
                      <?php } else { ?>
                        <?php echo wp_kses_post ( sprintf( _x( 'I have read and hereby accept the <a href="%s" target="_blank">conditions</a> of rental',
                                                             'renting_complete', 'mybooking-wp-plugin' ),
                                                         $args['terms_and_conditions'] ) ) ?>
                      <?php } ?>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-outline-dark"><?php echo esc_html_x( 'Confirm', 'renting_complete', 'mybooking-wp-plugin' ) ?></button>
                  </div>
                </div>
            </div>

        </div>
        <% } %>

        <!-- Pay now -->

        <div id="payment_now_container" <% if (selectionOptions > 1 || !sales_process.can_pay) { %>style="display:none"<%}%>>

            <div class="border p-4" style="border: 1px solid #eee; padding: 10px">
                <h4><%=i18next.t('complete.reservationForm.total_payment', {amount: configuration.formatCurrency(paymentAmount)})%></h4>
                <br>

                <!-- Payment amount -->

                <div class="alert alert-info">
                   <p><%=i18next.t('complete.reservationForm.booking_amount',{amount: configuration.formatCurrency(paymentAmount)})%></p>
                </div>

                <% if (sales_process.payment_methods.paypal_standard &&
                       sales_process.payment_methods.tpv_virtual) { %>
                    <div class="form-row">
                       <div class="form-group col-md-12">
                         <label for="payments_paypal_standard">
                          <input type="radio" id="payments_paypal_standard" name="payment_method_select" class="payment_method_select" value="paypal_standard">&nbsp;
                          <?php echo esc_html_x( 'Paypal', 'renting_complete', 'mybooking-wp-plugin' ) ?>
                          <img src="/wp-content/mybooking-templates/pm-paypal.jpg"/>
                         </label>
                       </div>
                       <div class="form-group col-md-12">
                         <label for="payments_credit_card">
                          <input type="radio" id="payments_credit_card" name="payment_method_select" class="payment_method_select" value="<%=sales_process.payment_methods.tpv_virtual%>">&nbsp;<?php echo _x( 'Credit or debit card', 'renting_complete', 'mybooking-wp-plugin' ) ?>
                          <img src="/wp-content/mybooking-templates/pm-visa.jpg"/>
                          <img src="/wp-content/mybooking-templates/pm-mastercard.jpg"/>
                         </label>
                       </div>
                    </div>
                    <div id="payment_method_select_error" class="form-row">
                    </div>
                <% } else if (sales_process.payment_methods.paypal_standard) { %>
                    <img src="/wp-content/mybooking-templates/pm-paypal.jpg"/>
                    <input type="hidden" id="payment_method_value" value="paypal_standard">
                <% } else if (sales_process.payment_methods.tpv_virtual) { %>
                    <img src="/wp-content/mybooking-templates/pm-mastercard.jpg"/>
                    <img src="/wp-content/mybooking-templates/pm-visa.jpg"/>
                    <input type="hidden" id="payment_method_value" value="<%=sales_process.payment_methods.tpv_virtual%>">
                <% } %>

                <hr>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="conditions_read_pay_now">
                      <input type="checkbox" id="conditions_read_pay_now" name="conditions_read_pay_now" style="width: 20px; height: 20px; border: 1px solid #eee; z-index:9999; appearance: checkbox; -webkit-appearance: checkbox; -moz-appearance: checkbox">&nbsp;
                        <?php if ( empty($args['terms_and_conditions']) ) { ?>
                          <?php echo esc_html_x( 'I have read and hereby accept the conditions of rental', 'renting_complete', 'mybooking-wp-plugin' ) ?>
                        <?php } else { ?>
                          <?php echo wp_kses_post ( sprintf( _x( 'I have read and hereby accept the <a href="%s" target="_blank">conditions</a> of rental',
                                                               'renting_complete', 'mybooking-wp-plugin' ),
                                                           $args['terms_and_conditions'] ) )?>
                        <?php } ?>
                    </label>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-outline-dark"><%=i18next.t('complete.reservationForm.payment_button',{amount: configuration.formatCurrency(paymentAmount)})%></a>
                  </div>
                </div>
            </div>

        </div>
    <% } %>

</script>