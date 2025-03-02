<?php
// Enqueue script-function
function myTM_enqueue_assets_script() {
    // Inline JavaScript for smooth scrolling
    wp_add_inline_script('jquery', "
        document.addEventListener('DOMContentLoaded', function() {
            const ctaButton = document.querySelector('.cta-button');
            if (ctaButton) {
                ctaButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const featuresSection = document.querySelector('#features');
                    if (featuresSection) {
                        window.scrollTo({
                            top: featuresSection.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            }
        });
    ");
}
add_action('wp_enqueue_scripts', 'myTM_enqueue_assets_script');

?>