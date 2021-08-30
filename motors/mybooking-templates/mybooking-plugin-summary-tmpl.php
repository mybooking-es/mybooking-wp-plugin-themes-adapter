    <!-- Reservation summary -->
    <script type="text/tmpl" id="script_reservation_summary">

        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-6" style="font-size: 2em"><%= booking.summary_status %></h1>
              </div>
            </div>
          </div>
        </div>  

        <!-- Summary message -->
        <div class="row">
          <div class="col-md-12">
            <h2 class="h4" style="font-size: 2em; margin-bottom: 1em"><?php echo esc_html_x( 'Reservation Id', 'renting_my_reservation', 'mybooking-wp-plugin') ?>: <%= booking.id %></h2>
          </div>
        </div> 

        <div class="row">
          <div class="col-md-4">
            <h2 class="h4" style="border-bottom: 1px solid #ddd"><?php echo MyBookingEngineContext::getInstance()->getProduct() ?></h2>
            <% for (var idx=0; idx<booking.booking_lines.length; idx++) { %>
            <div class="card">
              <img class="card-img-top" src="<%=booking.booking_lines[idx].photo_medium%>"
                   alt="<%=booking.booking_lines[idx].item_description_customer_translation%>"
                   style="display: block; margin: 0 auto">
              <div class="card-body">
                <p class="card-text text-center"><strong><%=booking.booking_lines[idx].item_description_customer_translation%></strong></p>
              </div>
            </div>
            <% } %>
          </div>

          <div class="col-md-4">
            <h2 class="h4" style="border-bottom: 1px solid #ddd"><?php echo MyBookingEngineContext::getInstance()->getDeliveryDate() ?></h2>
            <p class="pb-2"><strong style="font-weight:600"><%=booking.date_from_full_format%></strong></p>
          </div>

          <div class="col-md-4">
            <h2 class="h4" style="border-bottom: 1px solid #ddd"><?php echo MyBookingEngineContext::getInstance()->getCollectionDate() ?></h2>
            <p class="pb-2"><strong style="font-weight:600"><%=booking.date_from_full_format%></strong></p>
          </div>
        </div>

        <br>

        <div class="row" style="margin-top: 2em">  
          <div class="col-md-12">
            <h2 class="h4" style="border-bottom: 1px solid #ddd"><?php echo esc_html_x( "Customer's details", 'renting_my_reservation', 'mybooking-wp-plugin') ?></h2>
          </div>
          <div class="col-md-4">
            <h3 class="h5 font-weight-normal"><?php echo esc_html_x( 'Name', 'renting_complete', 'mybooking-wp-plugin') ?></h3>
            <p class="pb-2"><strong style="font-weight:600"><%=booking.customer_name%> <%=booking.customer_surname%></strong></p>
          </div>
          <div class="col-md-4">
            <h3 class="h5 font-weight-normal"><?php echo esc_html_x( 'Phone number', 'renting_complete', 'mybooking-wp-plugin') ?></h3>
            <p class="pb-2"><strong style="font-weight:600"><%=booking.customer_phone%> <%=booking.customer_mobile_phone%></strong></p> 
          </div>
          <div class="col-md-4">       
            <h3 class="h5 font-weight-normal"><?php echo esc_html_x( 'E-mail', 'renting_complete', 'mybooking-wp-plugin') ?></h3>
            <p class="pb-2"><strong style="font-weight:600"><%=booking.customer_email%></strong></p>                 
          </div>

        </div>  

        <!-- Totals -->
        <hr  style="margin-top: 2em">

        <div class="row">

          <div class="col-md-12">
                   
            <table class="table table-borderless">
              <tr>
                <td style="border:0"><span class="h4"><strong><?php echo MyBookingEngineContext::getInstance()->getProduct() ?></strong></span></td>
                <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.item_cost)%></span></td>
              </tr>
              <% if (booking.extras_cost > 0) { %>
              <tr>
                <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( 'Extras', 'renting_summary', 'mybooking-wp-plugin' ) ?></strong></span></td>
                <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.extras_cost)%></span></td>
              </tr>
              <% } %>

              <% if (booking.time_from_cost > 0) { %>
                <tr>
                  <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( 'Pick-up time supplement', 'renting_summary', 'mybooking-wp-plugin' ) ?></strong></span></td>
                  <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.time_from_cost)%></span></td>
                </tr>
              <% } %>

              <% if (booking.pickup_place_cost > 0) { %>
                <tr>
                  <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( 'Pick-up place supplement', 'renting_summary', 'mybooking-wp-plugin' ) ?></strong></span></td>
                  <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.pickup_place_cost)%></span></td>
                </tr>
              <% } %>

              <% if (booking.time_to_cost > 0) { %>
                <tr>
                  <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( 'Return time supplement', 'renting_summary', 'mybooking-wp-plugin' ) ?></strong></span></td>
                  <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.time_to_cost)%></span></td>
                </tr>
              <% } %>

              <% if (booking.return_place_cost > 0) { %>
                <tr>
                  <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( 'Return place supplement', 'renting_summary', 'mybooking-wp-plugin' ) ?></strong></span></td>
                  <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.return_place_cost)%></span></td>
                </tr>
              <% } %>

              <% if (booking.driver_age_cost > 0) { %>
                <tr>
                  <td style="border:0"><span class="h4"><strong><?php echo esc_html_x( "Driver's age supplement", 'renting_summary', 'mybooking-wp-plugin' ) ?></strong></span></td>
                  <td style="border:0"><span class="h4 text-right" style="display:block"><%= configuration.formatCurrency(booking.driver_age_cost)%></span></td>
                </tr>
              <% } %>

              <tr>
                <td style="border:0"><span class="h3"><?php echo esc_html_x( 'Total', 'renting_summary', 'mybooking-wp-plugin' ) ?></span></td>
                <td style="border:0"><span class="h3 text-right" style="display:block; color:#af0000"><%= configuration.formatCurrency(booking.total_cost)%></span></td>
              </tr>
            </table>
          </div>

        </div>

      </div>
    </script>
