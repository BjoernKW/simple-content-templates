<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://objectiv.co
 * @since      1.0.0
 *
 * @package    Advanced_Content_Templates
 * @subpackage Advanced_Content_Templates/admin/partials
 */

$post_type_objects = $this->plugin->get_post_types();
$templates = $this->get_templates();
$act_post_type_settings = $this->plugin->get_setting('act_post_type_settings');
?>
<div class="wrap">
	<?php global $wp_tabbed_navigation; ?>
	<?php $wp_tabbed_navigation->display_tabs(); ?>

	<script>!function(e,o,n){window.HSCW=o,window.HS=n,n.beacon=n.beacon||{};var t=n.beacon;t.userConfig={},t.readyQueue=[],t.config=function(e){this.userConfig=e},t.ready=function(e){this.readyQueue.push(e)},o.config={docs:{enabled:!1,baseUrl:""},contact:{enabled:!0,formId:"5d840a56-0f38-11e7-9841-0ab63ef01522"}};var r=e.getElementsByTagName("script")[0],c=e.createElement("script");c.type="text/javascript",c.async=!0,c.src="https://djtflbt20bdde.cloudfront.net/",r.parentNode.insertBefore(c,r)}(document,window.HSCW||{},window.HS||{});</script>
    <script>
      HS.beacon.config({
        modal: true,
        instructions: 'We can\'t wait to help you with Simple Content Templates! If you find a problem with our plugin, please use this form to report it.',
    });
    </script>

    <h3>Need help?</h3>
    <p>Excellent support is in our DNA.</p><p>If you need help with anything at all, please click this button to file a support request:</p>
    <?php submit_button('Support Request', 'primary', false, false, array('id'=> 'act-support-button') ); ?>

    <script>
    jQuery("#act-support-button").click(function() {
        HS.beacon.open();
    });
    </script>
</div>
