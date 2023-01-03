<?php

add_action('admin_head','true_colored_admin_bar72aee6');

function true_colored_admin_bar72aee6(){
    echo '<style>#wpadminbar{background-color:#72aee6}</style>';
}
register_activation_hook(__FILE__, 'true_activate');
function true_activate() {
    deactivate_plugins('hello.php');
}