<?php

defined( 'ABSPATH' ) or exit;

if ( ! class_exists( 'Install_GitHub_Updater' ) ) {

    class Install_GitHub_Updater
    {
        function __construct() {
            add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
        }


        function plugins_loaded() {
            
        }


        function is_installed() {

        }


        function is_active() {

        }


        function is_writable() {

        }


        function install() {

        }


        function notify() {

        }
    }

    new Install_GitHub_Updater();
}
