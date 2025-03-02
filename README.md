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

# Version 2 (v2)

- use a function in `functions.php` that will include TailwindCSS PlayCDN using `<script>` tag. This CDN will be applied to all pages

The function will be like as below

```ruby
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
```
