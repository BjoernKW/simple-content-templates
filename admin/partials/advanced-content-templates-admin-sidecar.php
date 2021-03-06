<?php
global $post, $act_plugin_admin;
$templates = $this->get_templates();

if ( empty($templates) ) {
	echo "You don't have any content templates.";
	return;
};
?>
<div style="text-align: right">
	<select name="act_template" id="act_template" style="width: 100%">
		<?php foreach($templates as $template): ?>
			<option value="<?php echo $template->ID; ?>"><?php echo $template->post_title; ?></option>
		<?php endforeach; ?>
	</select>

	<input class="button-primary" style="margin-top: 10px;" name="act_load_template" id="act_load_template" type="button" value="Load Template" />
</div>

<h4>Advanced Content Templates</h4>
<p>Want more powerful features like custom fields, featured images, and taxonomies? Go premium!</p>
<a class="button-secondary" target="_blank" href="https://www.advancedcontenttemplates.com?utm_medium=Sidecar&utm_content=<?php echo urlencode("Get Advanced Content Templates"); ?>">Get Advanced Content Templates</a>

<script>
jQuery(document).ready(function() {
	jQuery("#act_load_template").click(function(e) {
		e.preventDefault();

		if( confirm('Are you sure? Loading this template may wipe out existing changes.') ) {
			var template = jQuery("#act_template option:selected").val();
			window.location = 'post-new.php?post_id=<?php echo $post->ID; ?>&act_template_load=' + template;
		}
	})
});
</script>
