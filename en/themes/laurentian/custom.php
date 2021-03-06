<?php 
/**
 * Use this file to define customized helper functions, filters or 'hacks'
 * defined specifically for use in your Omeka theme. Ideally, you should
 * namespace these with your theme name to avoid conflicts with functions
 * in Omeka and any plugins.
 */


function LU_curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
