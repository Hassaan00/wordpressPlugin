<?php
defined('ABSPATH') || die('Nice Try');
register_uninstall_hook(__FILE__,'so_register_uninstall_hook');
function so_register_uninstall_hook(){
    delete_option('updateTitle');
}