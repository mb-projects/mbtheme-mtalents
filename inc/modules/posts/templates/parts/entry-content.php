<?php

/**
 * Template part for displaying content
 */
if ( is_singular() ) {
    the_content();
}else{
    the_excerpt();
}