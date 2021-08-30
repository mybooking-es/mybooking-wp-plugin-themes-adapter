<?php
  /** 
   * The Template for showing the renting selector widget - JS Microtemplates
   *
   * This template can be overridden by copying it to yourtheme/mybooking-templates/mybooking-plugin-selector-widget-tmpl.php
   *
   * @phpcs:disable PHPCompatibility.Miscellaneous.RemovedAlternativePHPTags.MaybeASPOpenTagFound 
   * @phpcs:disable Generic.PHP.DisallowAlternativePHPTags.MaybeASPOpenTagFound
   * @phpcs:disable Generic.PHP.DisallowAlternativePHPTags.MaybeASPShortOpenTagFound   
   */
?>
<!-- =========================================== -->
<!--			 Renting Form selector template 			 -->
<!-- =========================================== -->
<script type="text/tmpl" id="widget_form_selector_tmpl">

        <div class="row">
          <div class="col-md-4">
            <label style="margin-bottom:0.5em; margin-top: 0.5em"><strong><?php echo esc_html( MyBookingEngineContext::getInstance()->getDeliveryDate() ) ?></strong></label>
            <input type="text"
                   id="widget_date_from"
                   name="date_from"
                   class="form-control"
                   autocomplete="off"
                   readonly="true"/>
          </div>
          <div class="col-md-4">
            <label style="margin-bottom:0.5em; margin-top: 0.5em"><strong><?php echo esc_html( MyBookingEngineContext::getInstance()->getCollectionDate() ) ?></strong></label>
            <input type="text"
                   id="widget_date_to"
                   name="date_to"
                   class="form-control"
                   autocomplete="off"
                   readonly="true"/>
          </div>         
          <div class="col-md-2">
            <input class="button btn-primary" type="submit" value="<?php echo esc_html_x( 'Search', 'renting_form_selector', 'mybooking-wp-plugin') ?>" />
          </div>
        </div>        
	
</script>	