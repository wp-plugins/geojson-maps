<div class="wrap"><h2><?php print GM_PUGIN_NAME ." ". GM_CURRENT_VERSION; ?></h2><form method="post" action="options.php">    <?php		settings_fields( 'gm-settings-group' );	?>    <table class="form-table">        <tr valign="top">        <th scope="row">Default Zoom</th>        <td><input type="text" name="gm_zoom" value="<?php echo get_option('gm_zoom'); ?>" /><em>e.g. 15</em></td>        </tr>        <tr valign="top">        <th scope="row">Minimum allowable Zoom</th>        <td><input type="text" name="gm_minzoom" value="<?php echo get_option('gm_minzoom'); ?>" /><em>e.g. 13</em></td>        </tr>        <tr valign="top">        <th scope="row">Maximum allowable Zoom</th>        <td><input type="text" name="gm_maxzoom" value="<?php echo get_option('gm_maxzoom'); ?>" /><em>e.g. 17</em></td>        </tr>                 <tr valign="top">        <th scope="row">Default Map Latitude</th>        <td><input type="text" name="gm_lat" value="<?php echo get_option('gm_lat'); ?>" /><em>e.g. 40.74857</em></td>        </tr>        <tr valign="top">        <th scope="row">Default Map Longitude</th>        <td><input type="text" name="gm_lng" value="<?php echo get_option('gm_lng'); ?>" /><em>e.g. -73.88802</em></td>        </tr>        <tr valign="top">        <th scope="row">Map Bounds</th>        <td><input type="text" size="40" name="gm_maxbounds" value="<?php echo get_option('gm_maxbounds'); ?>" /><em>e.g. [40.666, -74.040], [40.830, -73.740]</em></td>        </tr>        <tr valign="top">        <th scope="row">Map Width (px)</th>        <td><input type="text" name="gm_width" value="<?php echo get_option('gm_width'); ?>" /><em>e.g. 600</em></td>        </tr>        <tr valign="top">        <th scope="row">Map Height (px)</th>        <td><input type="text" name="gm_height" value="<?php echo get_option('gm_height'); ?>" /><em>e.g. 400</em></td>        </tr>            </table>        <p class="submit">    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />    </p></form></div>