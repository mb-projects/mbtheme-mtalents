<?php

// Flush rewrite rules for custom post types.
add_action( 'after_switch_theme', 'flush_rewrite_rules' );