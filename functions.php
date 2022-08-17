<?php

// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));

// Hooks
//-Adding the first hook to equeue the style files
add_action('wp_enqueue_scripts', 'u_enqueue');