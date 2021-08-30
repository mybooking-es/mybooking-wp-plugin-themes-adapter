    <section class="widget widget_mybooking_rent_engine_selector reservation-step stm-contact-us-form-wrapper">
      <form
        name="widget_search_form"
        method="get"
        enctype="application/x-www-form-urlencoded">
        
        <?php if ( $args['sales_channel_code'] != '' ) : ?>
        <input type="hidden" name="sales_channel_code" value="<?php echo $args['sales_channel_code']?>"/>
        <?php endif; ?>

        <?php if ( $args['family_id'] != '' ) : ?>
        <input type="hidden" name="family_id" value="<?php echo $args['family_id']?>"/>
        <?php endif; ?>
        
      </form>
    </section>