<?php
$ccsm_options      = get_option( 'ccsm_settings' );
$counterActivation = $ccsm_options['colorlib_coming_soon_timer_activation'];
$template          = $ccsm_options['colorlib_coming_soon_template_selection'];
$counter           = $ccsm_options['colorlib_coming_soon_timer_option'];
$dates             = ccsm_counter_dates( $counter );
?>
    <div class="simpleslide100">
        <div class="simpleslide100-item bg-img1"
             style="background-image: url('<?php echo ( $ccsm_options['colorlib_coming_soon_background_image'] ) ? esc_url( $ccsm_options['colorlib_coming_soon_background_image'] ) : ''; ?>');"></div>
    </div>

    <div class="flex-w flex-str size1 overlay1">
        <div class="flex-w flex-col-sb wsize1 bg0 p-l-70 p-t-37 p-b-52 p-r-50 respon1">
            <div class="wrappic1">
				<?php if ( $ccsm_options['colorlib_coming_soon_plugin_logo'] ) {
					?>
                    <a href="<?php echo site_url(); ?>" class="logo-link"><img
                                src="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_plugin_logo'] ); ?>"
                                alt="<?php echo get_bloginfo(); ?>"></a>
					<?php
				}
				?>
            </div>
            <div class="w-full p-t-100 p-b-90 p-l-48 p-l-0-md">

                <h3 class="l1-txt1 p-b-34 respon3" id="colorlib_coming_soon_page_heading">
					<?php echo wp_kses_post( $ccsm_options['colorlib_coming_soon_page_heading'] ); ?>
                </h3>

                <p class="m2-txt1 p-b-46" id="colorlib_coming_soon_page_content">
					<?php echo wp_kses_post( $ccsm_options['colorlib_coming_soon_page_content'] ); ?>
                </p>
				<?php if ( $ccsm_options['colorlib_coming_soon_subscribe'] != '1' ) { ?>
                    <form class="contact100-form validate-form m-t-10 m-b-10"
                          action="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_subscribe_form_url'] ); ?>" method="POST">
                        <div class="wrap-input100 validate-input m-lr-auto-lg"
                             data-validate="<?php echo esc_attr__( 'Email is required: ex@abc.xyz', 'colorlib-coming-soon-maintenance' ); ?>">
                            <input class="s2-txt1 placeholder0 input100 trans-04" type="text" name="EMAIL"
                                   placeholder="<?php echo esc_attr__( 'Email Address', 'colorlib-coming-soon-maintenance' ); ?>">

                            <button class="flex-c-m ab-t-r size2 hov1 respon5" name="subscribe">
                                <i class="zmdi zmdi-long-arrow-right fs-30 cl1 trans-04"></i>
                            </button>

                            <div class="flex-c-m ab-t-l s2-txt1 size4 bor1 respon4">
                                <span><?php echo esc_html__( 'Subcribe Now', 'colorlib-coming-soon-maintenance' ); ?>:</span>
                            </div>
                        </div>
                    </form>
				<?php } ?>

            </div>

            <div class="flex-w flex-m">
				<span class="m2-txt2 p-r-40">
					<?php echo esc_html__( 'Follow us', 'colorlib-coming-soon-maintenance' ); ?>
				</span>
				<?php
				if ( $ccsm_options['colorlib_coming_soon_social_facebook'] ) {
					?>
                    <a href="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_social_facebook'] ); ?>"
                       id="colorlib_coming_soon_social_facebook"
                       class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
                        <i class="fa fa-facebook"></i>
                    </a>
					<?php
				}
				if ( $ccsm_options['colorlib_coming_soon_social_twitter'] ) {
					?>
                    <a href="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_social_twitter'] ); ?>"
                       id="colorlib_coming_soon_social_twitter"
                       class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
                        <i class="fa fa-twitter"></i>
                    </a>
					<?php
				}
				if ( $ccsm_options['colorlib_coming_soon_social_youtube'] ) {
					?>
                    <a href="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_social_youtube'] ); ?>"
                       id="colorlib_coming_soon_social_youtube"
                       class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
                        <i class="fa fa-youtube-play"></i>
                    </a>
					<?php
				}
				if ( $ccsm_options['colorlib_coming_soon_social_email'] ) {
					?>
                    <a href="mailto:<?php echo esc_html( antispambot( $ccsm_options['colorlib_coming_soon_social_email'] ) ); ?>"
                       id="colorlib_coming_soon_social_email"
                       class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
                        <i class="fa fa-envelope"></i>
                    </a>
					<?php
				}
				if ( $ccsm_options['colorlib_coming_soon_social_pinterest'] ) {
					?>
                    <a href="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_social_pinterest'] ); ?>"
                       id="colorlib_coming_soon_social_pinterest"
                       class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
                        <i class="fa fa-pinterest"></i>
                    </a>
					<?php
				}
				if ( $ccsm_options['colorlib_coming_soon_social_instagram'] ) {
					?>
                    <a href="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_social_instagram'] ); ?>"
                       id="colorlib_coming_soon_social_instagram"
                       class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
                        <i class="fa fa-instagram"></i>
                    </a>
					<?php
				}
				?>
            </div>
            <p style="position: absolute;bottom:0;" class="colorlib-copyright"><span><?php _e('Coming Soon Template designed by','colorlib-coming-soon-maintenance'); ?></span> <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
        </div>

        <div class="wsize2 bg-img1 respon2"
             style="background-image: url('<?php echo ( $ccsm_options['colorlib_coming_soon_background_image'] ) ? esc_url( $ccsm_options['colorlib_coming_soon_background_image'] ) : ''; ?>');">
        </div>
    </div>
<?php
if ( is_customize_preview() ) {
	?>
    <div style="display:none !important;">
		<?php
		wp_footer();
		?>
    </div>
	<?php
}
?>
<?php if ( $counterActivation == '1' && $dates['script'] != false ) { ?>
    <script>
        jQuery('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: <?php echo $dates['script']['year']; ?>,
            endtimeMonth: <?php echo $dates['script']['month']; ?>,
            endtimeDate: <?php echo $dates['script']['day']; ?>,
            endtimeHours: <?php echo $dates['script']['hour']; ?>,
            endtimeMinutes: <?php echo $dates['script']['minute']; ?>,
            endtimeSeconds: <?php echo $dates['script']['second']; ?>,
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
<?php } ?>