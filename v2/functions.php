<?php
// TailwindCSS PayCDN
function myTM_enqueue_tailwindcss_cdn() {
    wp_enqueue_script(
        'tailwindcss-cdn', // Unique handle for your script
        'https://unpkg.com/@tailwindcss/browser@4', // URL of the script
        array(), // Dependencies (none in this case)
        null, // Version (null to let WordPress handle it)
        false // Load in the <head> (false) or before </body> (true)
    );
}
add_action('wp_enqueue_scripts', 'myTM_enqueue_tailwindcss_cdn');
?>