<?php

/**
* @package hostingspellanalytics
*/

/*
Plugin Name: HostingSpell Analytics
Plugin URI: https://trackuser.hostingspell.dev
Description: HostingSpell Analytics is plugin which is available to HostingSpell customers who are having starter plan #2 or higher to track user.
Version: 1.0.0
Author: HostingSpell Development Team
Author URI: https://hostingspell.com
License: GPLv2 or later
Text Domain: hostingspell-analytics
*/

/*
This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
    
*/

if(!defined('ABSPATH'))
{
    die;
}

class hostingspellAnalytics
{


    function activate()
    {
        
        flush_rewrite_rules();
        
        
    }

    function deactivate()
    {
        
      flush_rewrite_rules();
        
    }
    
    function uninstall()
    {
        
    }
    function analyticsCode()
    {

        wp_register_script('analytics_code', 'https://trackuser.hostingspell.dev/tracker.min.js', array('jquery'), false, true);
        wp_enqueue_script('analytics_code','https://trackuser.hostingspell.dev/tracker.min.js',  array('jquery'),'false', true);

    }
    
    

}

if(class_exists('hostingspellAnalytics'))
{
    $hostingspellAnalytics = new hostingspellAnalytics();
    
}


     
    
  


// activation
register_activation_hook(__FILE__,array($hostingspellAnalytics,'activate'));


//deactivation
register_deactivation_hook(__FILE__,array($hostingspellAnalytics,'deactivate'));


//uninstall


//adding analytics code
add_action('init', array($hostingspellAnalytics,'analyticsCode'));



	



