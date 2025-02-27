# Adding Custom Script-Functions using functions.php

## Version 1 (v1)

We added a function for smooth scrolling

Ths `functions.php` is given in **v1** folder

We added below function in `functions.php`.

```ruby
<?php
// Enqueue script-function
function gifton_enqueue_assets_script() {
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
add_action('wp_enqueue_scripts', 'gifton_enqueue_assets_script');

?>
```
