<?php
$ccsm_options      = get_option( 'ccsm_settings' );
$counterActivation = $ccsm_options['colorlib_coming_soon_timer_activation'];
$template          = $ccsm_options['colorlib_coming_soon_template_selection'];
$counter           = $ccsm_options['colorlib_coming_soon_timer_option'];
$dates             = ccsm_counter_dates( $counter );
if ( ccsm_template_has_text_color() ) {
	?>
    <style>
        h1,h2,h3,p,span,li {
            color: <?php echo esc_html($ccsm_options['colorlib_coming_soon_text_color']); ?> !important;
        }
    </style>
	<?php
}
?>
<div class="bg-img1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15"
     style="background-image: url('<?php echo ( $ccsm_options['colorlib_coming_soon_background_image'] ) ? esc_url($ccsm_options['colorlib_coming_soon_background_image']) : ''; ?>');">
    <div class="wsize1 bor1 bg1 p-t-175 p-b-45 p-l-15 p-r-15 respon1">
        <div class="wrappic1">
			<?php if ( $ccsm_options['colorlib_coming_soon_plugin_logo'] ) {
				?>
                <a href="<?php echo site_url(); ?>" class="logo-link"><img src="<?php echo esc_url($ccsm_options['colorlib_coming_soon_plugin_logo']); ?>"
                                 alt="<?php echo get_bloginfo(); ?>"></a>
				<?php
			}
			?>
        </div>

        <p class="txt-center m1-txt1 p-t-33 p-b-68" id="colorlib_coming_soon_page_content">
			<?php echo wp_kses_post( $ccsm_options['colorlib_coming_soon_page_heading'] ); ?>
        </p>
		<?php if ( $counterActivation == '1' ) { ?>
            <div class="wsize2 flex-w flex-c hsize1 cd100">
                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 days"><?php echo $dates['template']['days']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Days', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 hours"><?php echo $dates['template']['hours']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Hours', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 minutes"><?php echo $dates['template']['minutes']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Minutes', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt1 p-b-9 seconds"><?php echo $dates['template']['seconds']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Seconds', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>
            </div>
		<?php } ?>
		<?php if ( $ccsm_options['colorlib_coming_soon_subscribe'] != '1' ) { ?>
            <form class="flex-w flex-c-m contact100-form validate-form p-t-55" action="<?php echo esc_url($ccsm_options['colorlib_coming_soon_subscribe_form_url']); ?>" method="POST">
                <div class="wrap-input100 validate-input where1" data-validate="<?php echo esc_attr__('Email is required: ex@abc.xyz','colorlib-coming-soon-maintenance'); ?>">
                    <input class="s1-txt2 placeholder0 input100" type="text" name="EMAIL" placeholder="<?php echo esc_attr__('Your Email','colorlib-coming-soon-maintenance'); ?>">
                    <span class="focus-input100"></span>
                </div>


                <button class="flex-c-m s1-txt3 size3 how-btn trans-04 where1" name="subscribe">
					<?php echo esc_html__( 'Get Notified', 'colorlib-coming-soon-maintenance' ); ?>
                </button>

            </form>

            <p class="s1-txt4 txt-center p-t-10" id="colorlib_coming_soon_page_footer">
				<?php echo wp_kses_post( $ccsm_options['colorlib_coming_soon_page_footer'] ); ?>
            </p>
		<?php } ?>
        <p class="colorlib-copyright"><span><?php _e('Coming Soon Template designed by','colorlib-coming-soon-maintenance'); ?></span> <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
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