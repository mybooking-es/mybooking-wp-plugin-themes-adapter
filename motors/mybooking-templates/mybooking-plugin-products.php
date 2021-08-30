<div class="special-offers style_1">
		<!-- Products -->
		<div class="listing-car-items-units">
			<div class="listing-car-items listing-cars-grid text-center clearfix special-carousel-91423">
				<?php foreach( $args['data']->data as $product ) { ?>

					<?php  $mybooking_productIdAnchor = $product->code;
			  	    if ( !empty( $product->slug) ) {
			  			  $mybooking_productIdAnchor = $product->slug;
		  				}
					?>

					<div class="dp-in">
						<div class="listing-car-item" style="width: 100%">
							<div class="listing-car-item-inner">
									<a href="<?php echo esc_url( $args['url_detail'].'/'.$mybooking_productIdAnchor ) ?>"
										 style="text-decoration: none">
										<div class="text-center">	
											<img class="img-responsive" src="<?php echo $product->photo_path?>" 
											    data-retina="<?php echo $product->photo_path?>" 
											    alt="<?php echo $product->name?>" style="display: block; margin: 0 auto">
									  </div>
										<div class="listing-car-item-meta">
									    <div class="car-meta-top heading-font clearfix" style="border-bottom: none">
									        <div class="price">
									            <div class="normal-price">
									            	<?php echo wp_kses( sprintf( _x('From <b>%s</b>', 'renting_products', 'mybooking-wp-plugin' ), 
			                                                                                             number_format_i18n( $product->from_price ) ),
			                                                                                    array( 'b' => array() ) ) ?>€
									            </div>
									        </div>
									        <div class="car-title" style="height: 36px">
									            <?php echo $product->name?> 
									        </div>
									    </div>
										</div>
								  </a>
							</div>
						</div>
					</div>
			  <?php  } ?>
			</div>
		</div>
	  
	  <!-- Pagination -->
	  <?php if ($args['total_pages'] > 1) { ?>
	  <?php $mybooking_querystring = array_key_exists('querystring', $args) ? $args['querystring'] : '' ?>
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="Page navigation example" class="pull-right">
				  <ul class="pagination">
				    <li class="page-item <?php if ($args['current_page'] == 1) { ?>disabled<?php } ?>">
				    	  <a class="page-link" href=""<?php echo esc_url( $args['url'].'?offsetpage='.($args['current_page']-1).$mybooking_querystring ) ?>">
				    	  	<?php echo esc_html_x('Previous', 'renting_products', 'mybooking-wp-plugin' ) ?></a>
				    </li>
	          <?php foreach ($args['pages'] as $page) { ?>
		          <?php if ($page == $args['current_page']) { ?>
						    <li class="page-item active" aria-current="page">
						      <span class="page-link">
						        <?php echo $page ?>
						      </span>
						    </li>			          
		          <?php } else { ?> 
		            <li class="page-item">
		            	<a class="page-link" href="<?php echo esc_url( $args['url'].'?offsetpage='.($page).$mybooking_querystring ) ?>">
		      	      <?php echo $page ?></a>
		      	    </li>  
		      	  <?php } ?>
				    <?php } ?>	    
				    <li class="page-item <?php if ($args['current_page'] == $args['total_pages']) { ?>disabled<?php } ?>">
				    	  <a class="page-link" href="<?php echo esc_url( $args['url'].'?offsetpage='.($args['current_page']+1).$mybooking_querystring ) ?>">
				    	  	<?php echo esc_html_x('Next', 'renting_products', 'mybooking-wp-plugin' ) ?></a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
		<?php } ?>

</div>