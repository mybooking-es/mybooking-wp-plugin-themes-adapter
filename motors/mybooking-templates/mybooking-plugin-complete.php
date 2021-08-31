<div class="reservation-step second">
    <div class="vc_row vc_row_fluid">
      <div class="wpb_column vc_column_container col-sm-8">
        <div class="vc_column-inner">
          <div id="extras_listing">
          </div>
          <div class="reservation_form_container">
            <form id="form-reservation" name="reservation_form" autocomplete="off" class="wpcf7-form">
                          
              <h2 class="customer_component"><?php echo esc_html_x( "Customer's details", 'renting_complete', 'mybooking-wp-plugin') ?></h2>

              <div class="row customer_component">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'Name', 'renting_complete', 'mybooking-wp-plugin') ?>*</div>
                    <p>
                      <span class="wpcf7-form-control-wrap name">
                        <input type="text" id="customer_name" name="customer_name" value=""
                               size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" 
                               placeholder="<?php echo esc_html_x( 'Name', 'renting_complete', 'mybooking-wp-plugin') ?>">
                      </span>
                    </p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'Surname', 'renting_complete', 'mybooking-wp-plugin') ?>*</div>
                    <p>
                      <span class="wpcf7-form-control-wrap name">
                        <input type="text" id="customer_surname" name="customer_surname" value="" size="40"
                               class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" 
                               placeholder="<?php echo esc_html_x( 'Surname', 'renting_complete', 'mybooking-wp-plugin') ?>">
                      </span>
                    </p>
                  </div>
                </div>              
              </div>  

              <div class="row customer_component">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'E-mail', 'renting_complete', 'mybooking-wp-plugin') ?>*</div>
                    <p>
                      <span class="wpcf7-form-control-wrap name">
                        <input type="text" id="customer_email" name="customer_email" value="" size="50" 
                               class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" 
                               placeholder="<?php echo esc_html_x( 'E-mail', 'renting_complete', 'mybooking-wp-plugin') ?>">
                      </span>
                    </p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'Confirm E-mail', 'renting_complete', 'mybooking-wp-plugin') ?>*</div>
                    <p>
                      <span class="wpcf7-form-control-wrap name">
                        <input type="text" id="confirm_customer_email" name="confirm_customer_email" value="" size="50" 
                               class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" 
                               placeholder="<?php echo esc_html_x( 'Confirm E-mail', 'renting_complete', 'mybooking-wp-plugin') ?>">
                      </span>
                    </p>
                  </div>
                </div>              
              </div>  

              <div class="row customer_component">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'Phone number', 'renting_complete', 'mybooking-wp-plugin') ?>*</div>
                    <p>
                      <span class="wpcf7-form-control-wrap name">
                        <input type="text" id="customer_phone" name="customer_phone" value="" size="50" 
                               class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" 
                               placeholder="<?php echo esc_html_x( 'Phone number', 'renting_complete', 'mybooking-wp-plugin') ?>">
                      </span>
                    </p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'Alternative phone number', 'renting_complete', 'mybooking-wp-plugin') ?></div>
                    <p>
                      <span class="wpcf7-form-control-wrap name">
                        <input type="text" id="customer_mobile_phone" name="customer_mobile_phone" value="" size="50" 
                               class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" 
                               placeholder="<?php echo esc_html_x( 'Alternative phone number', 'renting_complete', 'mybooking-wp-plugin') ?>">
                      </span>
                    </p>                  
                  </div>
                </div>              
              </div>  

              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <div class="contact-us-label"><?php echo esc_html_x( 'Comments', 'renting_complete', 'mybooking-wp-plugin') ?></div>
                    <p>                
                      <span class="wpcf7-form-control-wrap message">
                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" 
                        aria-invalid="false" placeholder="<?php echo esc_html_x( 'Comments', 'renting_complete', 'mybooking-wp-plugin') ?>"></textarea>
                      </span>
                    </p>
                  </div>
                </div>
              </div>  

              <!-- Reservation : payment -->
              <div id="payment_detail">
              </div>

              <br>

            </form>
          </div>
        </div>
      </div>
      <div class="wpb_column vc_column_container col-sm-4">
        <div id="reservation_detail"></div>
      </div>
    </div>

    <?php mybooking_engine_get_template('mybooking-plugin-modify-reservation.php') ?>
</div>

<!-- Show extra detail modal -->
<div class="modal fade modal-mybooking" tabindex="-1" role="dialog" id="modalExtraDetail">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-extra-detail-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo esc_attr_x( 'Close', 'renting_complete', 'mybooking-wp-plugin' ); ?>">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-extra-detail-content">
      </div>
    </div>
  </div>
</div>