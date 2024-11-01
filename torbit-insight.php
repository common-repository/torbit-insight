<?php
/*
Plugin Name: Torbit Insight
Plugin URI: http://torbit.com/insight
Description: How fast is your website? Start seeing real performance data from your site's actual visitors. This plugin adds <a href="http://torbit.com/insight">Torbit Insight</a> to your WordPress blog or website.
Version: 1.0
Author: jonefox
*/

function tb_insight_add_header_script() {
    echo "<script type='text/javascript'>var TBRUM=TBRUM||{};TBRUM.q=TBRUM.q||[];TBRUM.q.push(['mark','firstbyte',(new Date).getTime()]);(function(){var a=document.createElement('script');a.type='text/javascript';a.async=true;a.src=document.location.protocol+'//insight.torbit.com/v1/insight.min.js';var b=document.getElementsByTagName('script')[0];b.parentNode.insertBefore(a,b)})();</script>";
}

add_action( 'wp_head', 'tb_insight_add_header_script', 0 );