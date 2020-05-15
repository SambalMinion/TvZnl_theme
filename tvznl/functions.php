<?php

/**
 * Disable the entire website if you're not logged in.
 * Should be removed prior to final release of website.
 */
function wp_maintenance_mode()
{
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        wp_die('<h1>Under Maintenance</h1><br />The website at this address is under construction. Check back later.');
    }
}
add_action('get_header', 'wp_maintenance_mode');