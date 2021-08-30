<div class="stm-single-car-contact">
  <aside id="stm_listing_car_form-4" class="single-listing-car-sidebar-unit stm_listing_car_form">
        
    <div id="product_selector" data-code="<? echo $args['code']?>" role="form" class="wpcf7">
      <div class="screen-reader-response"></div>

          <form
            name="search_form"
            method="get"
            enctype="application/x-www-form-urlencoded">
            
            <!-- Pickup Place -->
            <div class="form-row">
              <div class="form-group">
                <div class="col-md-12">
                    <label for="pickup_place"><?php echo esc_attr_x( 'Select pick-up place', 'renting_product_calendar', 'mybooking-wp-plugin') ?></label>
                    <select id="pickup_place" name="pickup_place" placeholder="<?php echo esc_attr_x( 'Select pick-up place', 'renting_product_calendar', 'mybooking-wp-plugin') ?>" class="form-control w-100"></select>
                </div>
              </div>
            </div>

            <br>

            <!-- Return place -->
            <div class="form-row">                
              <div class="form-group">
                <div class="col-md-12">
                    <label for="pickup_place"><?php echo esc_attr_x( 'Select return place', 'renting_product_calendar', 'mybooking-wp-plugin' )?></label>
                    <select id="return_place" name="return_place" placeholder="<?php echo esc_attr_x( 'Select return place', 'renting_product_calendar', 'mybooking-wp-plugin' )?>" class="form-control w-100"></select>
                </div>
              </div>
            </div>

            <!-- Availability calendar -->        
            <div class="form-row">    
              <div class="form-group">
                <input id="date" type="hidden" name="date"/>
                <div id="date-container" class="disabled-picker"></div>
              </div>
            </div>

            <!-- Pickup/return time -->
            <div class="form-row" class="time_selector_container">
                <div class="form-group col-md-6">
                    <label for="time_from">Hora entrega</label>
                    <select id="time_from" name="time_from" placeholder="hh:mm" disabled class="form-control"> </select>
                </div>            
                <div class="form-group col-md-6">
                    <label for="time_to">Hora devolución</label>
                    <select id="time_to" name="time_to" placeholder="hh:mm" disabled class="form-control"> </select>
                </div>                   
            </div>
            <hr>
            <!-- Reservation detail -->
            <div id="reservation_detail" style="margin-top: 90px; margin-bottom: 20px">
            </div>     
            
          </form>

      
    </div>                  

  </aside>
</div>