<?php

// Remove action attribute
add_filter('wpcf7_form_action_url', 'wpcf7_remove_action_url');
function wpcf7_remove_action_url() {
    return null;
}

// Add netlify as attribute
add_action('wp_footer', 'wpcf7_add_netlify_attribute');
function wpcf7_add_netlify_attribute() { ?>
  <script>
    const wpcf7 = document.querySelectorAll('.wpcf7-form')
    for (var form of wpcf7) {
      console.log(form)
      form.setAttribute('data-netlify', 'true');
    }
  </script>
<?php }