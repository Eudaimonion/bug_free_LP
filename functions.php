<?php

function enqueue_styles() {
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/dist.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');