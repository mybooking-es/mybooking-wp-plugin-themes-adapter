    <!-- Script to show product search -->
    <script type="text/tpml" id="script_detailed_product">

      <div class="special-offers style_1">
        <!-- Products -->
        <div class="listing-car-items-units">
          <div class="listing-car-items listing-cars-grid text-center clearfix special-carousel-91423">
            <% for (var idxP=0;idxP<products.length;idxP++) { %>
              <% var product = products[idxP]; %>
                <div class="dp-in">
                  <div class="listing-car-item" style="width: 100%">
                    <div class="listing-car-item-inner">
                          <div class="car-image text-center"> 
                            <img class="img-responsive" src="<%=product.photo%>" 
                                data-retina="<%=product.photo%>" style="display: block; margin: 0 auto" 
                                alt="<%=product.name%>">
                          </div>
                          <div class="listing-car-item-meta">
                            <div class="car-meta-top heading-font clearfix">
                                <div class="price" style="background-color: transparent">
                                    <div class="normal-price" style="font-size: 1.1em; font-weight: 800">
                                      <%=configuration.formatCurrency(product.price)%>
                                    </div>
                                </div>
                                <div class="car-title" style="height: 36px">
                                    <%=product.name%><br>
                                    <span style="font-size:12px;font-weight:400;"><%=product.short_description%><span>
                                </div>
                                <% if (product.key_characteristics) { %>
                                  <div class="mybooking-product_characteristics">
                                    <% for (characteristic in product.key_characteristics) { %>
                                      <div class="mybooking-product_characteristics-item">
                                        <% var characteristic_image_path = '<?php echo esc_url( get_site_url().'/wp-content/plugins/mybooking-reservation-engine/assets/images/key_characteristics/' ) ?>'+characteristic+'.svg'; %>
                                        <img class="mybooking-product_characteristics-img" src="<%=characteristic_image_path%>" />
                                        <span class="mybooking-product_characteristics-key"><%=product.key_characteristics[characteristic]%> </span>
                                      </div>
                                    <% } %>
                                  </div>
                                <% } %>
                            </div>
                            <div class="car-meta-bottom">
                                <a class="button btn-choose-product" data-product="<%=product.code%>"><?php echo _x( 'Book it!', 'renting_choose_product', 'mybooking-wp-plugin') ?></a>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
            <% } %>
          </div>    
        </div>
      </div>

    </script>

    <!-- Script detailed for reservation summary -->
    <script type="text/tmpl" id="script_reservation_summary">
      <div class="tile is-parent is-vertical">
        <div class="tile is-child notification has-background-light">
          <p class="title">Reserva</h4>
          <div class="content">
            <p class="subtitle has-text-weight-semibold has-text-grey"><?php echo esc_html( MyBookingEngineContext::getInstance()->getDeliveryDate() ) ?></p>
            <ul>
              <li><%=shopping_cart.pickup_place_customer_translation%></li>
              <li><%=shopping_cart.date_from_full_format%> <% if (configuration.timeToFrom) { %><%=shopping_cart.time_from%><%}%></li>
            </ul>
          </div>
          <div class="content">
            <p class="subtitle has-text-weight-semibold has-text-grey"><?php echo esc_html( MyBookingEngineContext::getInstance()->getCollectionDate() ) ?></p>
            <ul>
              <li><%=shopping_cart.return_place_customer_translation%></li>
              <li><%=shopping_cart.date_to_full_format%> <% if (configuration.timeToFrom) { %><%=shopping_cart.time_to%><%}%></li>
            </ul>
          </div>
          <div class="content">
            <% if (shopping_cart.days > 0) { %>
              <p class="has-text-weight-semibold"><%=shopping_cart.days%> <?php echo MyBookingEngineContext::getInstance()->getDuration() ?></p>
            <% } else if (shopping_cart.hours > 0) { %>
              <p class="has-text-weight-semibold"><%=shopping_cart.hours%> <?php echo esc_html_x( 'hour(s)', 'renting_choose_product', 'mybooking-wp-plugin' ) ?></p>
            <% } %>
            <div class="is-pulled-right">
              <button id="modify_reservation_button" class="button is-primary"><?php echo esc_html_x( 'Edit', 'renting_choose_product', 'mybooking-wp-plugin' ) ?></button>  
            </div>  
          </div> 
        </div> 
      </div>
    </script>