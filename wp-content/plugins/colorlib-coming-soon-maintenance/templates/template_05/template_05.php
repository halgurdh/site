<?php
$ccsm_options      = get_option( 'ccsm_settings' );
$counterActivation = $ccsm_options['colorlib_coming_soon_timer_activation'];
$template          = $ccsm_options['colorlib_coming_soon_template_selection'];
$counter           = $ccsm_options['colorlib_coming_soon_timer_option'];
$dates             = ccsm_counter_dates( $counter );

?>
    <div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-b-30">
		<?php if ( $counterActivation == '1' ) { ?>
            <div class="flex-w flex-c cd100 wsize1 bor1">
                <div class="flex-col-c-m size2 bg0 bor2">
                    <span class="l1-txt3 p-b-7 days"><?php echo $dates['template']['days']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Days', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>

                <div class="flex-col-c-m size2 bg0 bor2">
                    <span class="l1-txt3 p-b-7 hours"><?php echo $dates['template']['hours']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Hours', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>

                <div class="flex-col-c-m size2 bg0 bor2">
                    <span class="l1-txt3 p-b-7 minutes"><?php echo $dates['template']['minutes']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Minutes', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>

                <div class="flex-col-c-m size2 bg0">
                    <span class="l1-txt3 p-b-7 seconds"><?php echo $dates['template']['seconds']; ?></span>
                    <span class="s1-txt1"><?php echo esc_html__( 'Seconds', 'colorlib-coming-soon-maintenance' ); ?></span>
                </div>
            </div>
		<?php } ?>


        <div class="flex-col-c w-full p-t-50 p-b-80">
            <h3 class="l1-txt1 txt-center p-b-10" id="colorlib_coming_soon_page_heading">
				<?php echo wp_kses_post( $ccsm_options['colorlib_coming_soon_page_heading'] ); ?>
            </h3>

            <p class="txt-center l1-txt2 p-b-43 wsize2" id="colorlib_coming_soon_page_content">
				<?php echo wp_kses_post( $ccsm_options['colorlib_coming_soon_page_content'] ); ?>
            </p>
			<?php if ( $ccsm_options['colorlib_coming_soon_subscribe'] != '1' ) { ?>
                <form class="flex-w flex-c-m w-full contact100-form validate-form"
                      action="<?php echo esc_url( $ccsm_options['colorlib_coming_soon_subscribe_form_url'] ); ?>" method="POST">
                    <div class="wrap-input100 validate-input where1"
                         data-validate="<?php echo esc_attr__( 'Name is required', 'colorlib-coming-soon-maintenance' ); ?>">
                        <input class="s1-txt3 placeholder0 input100" type="text" name="FNAME"
                               placeholder="<?php echo esc_attr__( 'Name', 'colorlib-coming-soon-maintenance' ); ?>">
                    </div>

                    <div class="wrap-input100 validate-input where1"
                         data-validate="<?php echo esc_attr__( 'Email is required: ex@abc.xyz', 'colorlib-coming-soon-maintenance' ); ?>">
                        <input class="s1-txt3 placeholder0 input100" type="text" name="EMAIL"
                               placeholder="<?php echo esc_attr__( 'Email', 'colorlib-coming-soon-maintenance' ); ?>">
                    </div>

                    <button class="flex-c-m s1-txt4 size3 how-btn trans-04 where1" name="subscribe">
						<?php echo esc_html__( 'Get Updates', 'colorlib-coming-soon-maintenance' ); ?>
                    </button>

                </form>
			<?php } ?>
        </div>

        <span class="s1-txt2 txt-center colorlib-copyright">
            <span><?php _e('Coming Soon Template designed by','colorlib-coming-soon-maintenance'); ?></span> <a href="https://colorlib.com/" target="_blank">Colorlib</a>
		</span>

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