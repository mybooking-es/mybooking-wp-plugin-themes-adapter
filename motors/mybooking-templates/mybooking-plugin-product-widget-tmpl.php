    <script type="text/tmpl" id="script_reservation_summary">


      <div class="wpb_wrapper" style="margin: 15px">
          <div class="stm-working-days vc_custom_1523868916343">
              <div>
                  <span class="h5"><?php echo esc_html_x( 'Reservation summary', 'renting_product_calendar', 'mybooking-wp-plugin') ?></span>
              </div>

              <!-- Exceeds max duration -->
              <% if (product && product.exceeds_max) { %>
                 <div class="alert alert-danger">
                    <p class="text-center"><%= i18next.t('chooseProduct.max_duration', {duration: i18next.t('common.'+product.price_units, {count: product.max_value, interpolation: {escapeValue: false}} ), interpolation: {escapeValue: false}}) %></p>
                 </div>  
              <!-- Less than min duration -->  
              <% } else if (product && product.be_less_than_min) { %>
                 <div class="alert alert-danger">
                    <p class="text-center"><%= i18next.t('chooseProduct.min_duration', {duration: i18next.t('common.'+product.price_units, {count: product.min_value, interpolation: {escapeValue: false}} ), interpolation: {escapeValue: false}}) %></p>
                 </div>  
              <!-- Available --> 
              <% } else if (product_available) { %>

                <table class="stm-working-days-table">
                    <tbody>
                        <tr>
                            <% if (shopping_cart.days) { %>
                            <td class="day-label"><?php echo MyBookingEngineContext::getInstance()->getDuration() ?></td>
                            <td class="heading-font day-value day-closed"><%=shopping_cart.days%></td>
                            <% } else if (shopping_cart.hours) { %>
                            <td class="day-label"><?php echo esc_html_x( 'hours(s)', 'renting_product_calendar', 'mybooking-wp-plugin' ) ?></td>
                            <td class="heading-font day-value day-closed"><%=shopping_cart.hours%></td>
                            <% } %>
                        </tr>
                        <tr>
                            <td class="day-label"><?php echo MyBookingEngineContext::getInstance()->getProduct() ?></td>
                            <td class="heading-font day-value"><%=configuration.formatCurrency(shopping_cart.item_cost)%></td>
                        </tr>

                        <% if (shopping_cart.time_from_cost > 0) { %>
                        <tr>
                            <td class="day-label"><?php echo esc_html_x( 'Pick-up time supplement', 'renting_product_calendar', 'mybooking-wp-plugin' ) ?></td>
                            <td class="heading-font day-value"><%=configuration.formatCurrency(shopping_cart.time_from_cost)%></td>
                        </tr>
                        <% } %>

                        <% if (shopping_cart.pickup_place_cost > 0) { %>
                        <tr>
                            <td class="day-label"><?php echo esc_html_x( 'Pick-up place supplement', 'renting_product_calendar', 'mybooking-wp-plugin' ) ?></td>
                            <td class="heading-font day-value"><%=configuration.formatCurrency(shopping_cart.pickup_place_cost)%></td>
                        </tr>
                        <% } %>


                        <% if (shopping_cart.time_to_cost > 0) { %>
                        <tr>
                            <td class="day-label"><?php echo esc_html_x( 'Return time supplement', 'renting_product_calendar', 'mybooking-wp-plugin' ) ?>></td>
                            <td class="heading-font day-value"><%=configuration.formatCurrency(shopping_cart.time_to_cost)%></td>
                        </tr>
                        <% } %>

                        <% if (shopping_cart.pickup_place_cost > 0) { %>
                        <tr>
                            <td class="day-label"><?php echo esc_html_x( 'Return place supplement', 'renting_product_calendar', 'mybooking-wp-plugin' ) ?></td>
                            <td class="heading-font day-value"><%=configuration.formatCurrency(shopping_cart.return_place_cost)%></td>
                        </tr>
                        <% } %>
                        <tr>
                            <td class="day-label"><?php echo esc_html_x( 'Total', 'renting_product_calendar', 'mybooking-wp-plugin' ) ?></td>
                            <td class="heading-font day-value"><%=configuration.formatCurrency(shopping_cart.total_cost)%></td>
                        </tr>

                    </tbody>
                </table>

                <div class="form-group">
                   <input id="add_to_shopping_cart_btn" 
                          class="btn w-100" 
                          type="submit" value="<?php echo esc_attr_x( 'Book Now!', 'renting_product_calendar', 'mybooking-wp-plugin') ?>"/>
                </div>   

              <% } else { %>
                <% if (product_type == 'resource') { %>
                  <div class="alert alert-danger">
                    <p><?php echo esc_html_x( 'Book Now!', 'renting_product_calendar', 'mybooking-wp-plugin') ?></p>
                    <p><?php echo esc_html_x( 'Sorry, there is no availability during these hours', 'renting_product_calendar', 'mybooking-wp-plugin') ?></p>
                  </div>
                <% } else if (product_type == 'category_of_resources') { %>
                  <div class="alert alert-warning">
                    <p><?php echo esc_html_x( 'Sorry, there is no availability for the entire period. The calendar shows those days when there is availability, but it may not be available for certain consecutive dates.', 'renting_product_calendar', 'mybooking-wp-plugin') ?></p>
                  </div>
                <% } %>
              <% } %>  

          </div>
      </div>
    </script>