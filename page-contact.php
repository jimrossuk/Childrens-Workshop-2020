<?php get_header(); ?>


			<div id="content" class=" align-self-center">

				<div id="inner-content  "  class="">
							<!-- m-all t-2of3 d-5of7  ARe Classes i deleted from below -->
						<main id="main" class=" cf" role="main" itemscope 
						
						itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<h1 class="uppercase   text-center">
									<?php the_title(); ?>						
							</h1>
								<div class="contact-grid">

									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
									
										<header class=" article-header">
										
										</header>

										<section class="entry-content cf">
									
											<?php the_content(); ?>
										</section>
									</article>

										<?php endwhile; ?>            
												<?php bones_page_navi(); ?>

										<?php else : ?>

												<article id="post-not-found" class="hentry cf">
														<header class="article-header">
															<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
													</header>
														<section class="entry-content">
															<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
													</section>
													<footer class="article-footer">
															<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
													</footer>
												</article>

										<?php endif; ?>

										<div class= "xy">
																		<div class="mb-3  ">
																			<p class="mx-auto h3">Email:</p>
																			<a  class="h2" href="mailto:<?php the_field('email_address', 'option'); ?>" > <?php the_field('email_address', 'option'); ?></a> 
																		</div>
														
																		<div class="mb-3">
																			<p class="mx-auto h3">Mobile:</p>
																			<a class="h2"  href="tel:<?php the_field('mobile_number', 'option'); ?>"> <?php the_field('mobile_number', 'option');  ?></a>
																		</div>

																		<div>
																			<p class=" h3">Landline:</p>
																			<div class="mx-auto">
																				<a class="h2"href="tel:<?php the_field('landline_number', 'option'); ?>"> <?php the_field('landline_number', 'option');  ?></a>
																			</div>
																		</div>
																		<div class="address top-marg lh-contact">
																			<h5> Address:</h5>
																		<?php
																			$address = get_field('address', 'option');
																			if( $address ): ?>
																					<div class="">
																						<p>  <?php echo ( $address ['street']  ); ?>  </p>
																						<p>  <?php echo ( $address ['city']  ); ?>  </p>
																						<p>  <?php echo ( $address ['post_code']  ); ?>  </p>
																					</div>    
																				<?php endif; ?>

																	</div>
										</div>
								</div>				
						</main>

					<!-- Where the sidbebar would go -->

				</div>

			</div>


<?php get_footer(); ?>
