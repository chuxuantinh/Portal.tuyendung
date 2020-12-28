<?php/**  * @Mailchimp List */if ( ! function_exists( 'cs_mailchimp_list' ) ) {	function cs_mailchimp_list($apikey){		global $cs_theme_options;		$MailChimp = new MailChimp($apikey);		$mailchimp_list = $MailChimp->call('lists/list');		return $mailchimp_list;	}}/**  * @custom mail chimp form */     if ( ! function_exists( 'cs_custom_mailchimp' ) ) {	function cs_custom_mailchimp(){		global $cs_theme_options,$counter, $jobcareer_options;						$counter++;		      ?>              			<script>				function cs_mailchimp_submit(theme_url,counter,admin_url){				'use strict';				$ = jQuery;				$('#process_'+counter).html('<div id="process_newsletter_'+counter+'"><i class="icon-refresh icon-spin" style="float:right;margin:12px 0px 0px 0px;"></i></div>');						$.ajax({							type:'POST', 							url: admin_url,							data:$('#mcform_'+counter).serialize()+'&action=jobcareer_mailchimp', 							success: function(response) {							$('#mcform_'+counter).get(0).reset();							$('#newsletter_mess_'+counter).fadeIn(600);							$('#newsletter_mess_'+counter).html(response);							//$('#btn_newsletter_'+counter).fadeIn(600);							$('#process_'+counter).html('');						}					});				}            </script>            <div id ="process_newsletter_<?php echo intval($counter);?>">                <div id="process_<?php echo intval($counter);?>" class="cs-show-msg"> </div>                <div id="newsletter_mess_<?php echo intval($counter);?>" style="display:none" class="cs-error-msg"></div>                 <form  action="javascript:cs_mailchimp_submit('<?php echo get_template_directory_uri()?>','<?php echo esc_js($counter); ?>','<?php echo admin_url('admin-ajax.php'); ?>')" id="mcform_<?php echo intval($counter);?>" method="post">                    <input id="cs_list_id" type="hidden" name="cs_list_id" value="<?php if(isset($jobcareer_options['jobcareer_mailchimp_list'])){ echo esc_attr($jobcareer_options['jobcareer_mailchimp_list']); }?>" />                    <input type="text" id="mc_email" class="txt-bar"  name="mc_email" placeholder=" <?php esc_html_e('Enter Valid Email Address','cs_frame'); ?>">                    <input type="submit" class ="submit-btn cs-bgcolor vsmall" id="btn_newsletter_<?php echo intval($counter);?>"   value="<?php esc_html_e('Submit','cs_frame'); ?>">                </form>            </div>         <?php        	}} if ( ! function_exists( 'cs_short_code' ) ) {		function cs_short_code($name = '', $function = '') {					if ($name != '' && $function != '') {				add_shortcode($name, $function);			}		} }