<?php

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * Built for use on BlueMix.
 */

$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);
$mysql_config = $services_json["mysql-5.5"][0]["credentials"];
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => $mysql_config["name"],
      'username' => $mysql_config["user"],
      'password' => $mysql_config["password"],
      'host' => $mysql_config["host"],
      'port' => $mysql_config["port"],
      'driver' => 'mysql',
      'prefix' => 'main_',
    ),
  ),
);

$update_free_access = FALSE;
$drupal_hash_salt = '';

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.gc_maxlifetime', 200000);

ini_set('session.gc_maxlifetime', 200000);

$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

