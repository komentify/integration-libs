<?php

 //Grab all options
$options = get_option($this->plugin_name);

$appId = $options['app_id'];
?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="komentifyconfig" action="options.php">

      <?php settings_fields($this->plugin_name); ?>

      <p style="max-width: 600px">
        You only need to specify an App ID to start useage of komentify comments in your app.
        Just leave it blank if you want to have komentify momentarily disabled.
      </p>

        <fieldset style="margin-top: 10px">
            <label>App ID:
            <legend class="screen-reader-text"><span><?php _e('Add the App ID', $this->plugin_name); ?></span></legend>
            <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-app_id" name="<?php echo $this->plugin_name; ?>[app_id]" value="<?= $appId ?>"/>
            </label>
        </fieldset>

        <?php submit_button('Save Changes', 'primary','submit', TRUE); ?>

    </form>

</div>
