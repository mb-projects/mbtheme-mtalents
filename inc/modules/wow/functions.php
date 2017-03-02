<?php

/*
 * Author: MBDigiLab
 */

if ( !function_exists( 'mbtheme_wow_get_animation_list' ) ) {

    function mbtheme_wow_get_animation_list() {
        $animations = array(
            ''               => 'none',
            'fadeIn'         => 'fadeIn',
            'fadeInDown'     => 'fadeInDown',
            'fadeInDownBig'  => 'fadeInDownBig',
            'fadeInLeft'     => 'fadeInLeft',
            'fadeInLeftBig'  => 'fadeInLeftBig',
            'fadeInRight'    => 'fadeInRight',
            'fadeInRightBig' => 'fadeInRightBig',
            'fadeInUp'       => 'fadeInUp',
            'fadeInUpBig'    => 'fadeInUpBig',
            'slideInUp'      => 'slideInUp',
            'slideInDown'    => 'slideInDown',
            'slideInLeft'    => 'slideInLeft',
            'slideInRight'   => 'slideInRight',
        );
        return $animations;
    }

}