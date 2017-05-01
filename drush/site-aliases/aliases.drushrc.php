<?php
/**
 * @file
 * Drush Aliases for Example.com.
 */

$aliases['local'] = array(
  'root' => '/var/www/drupal/web',
  'uri' => 'd8-dev.local',
);

$aliases['remote'] = array(
  'root' => '/var/www/html/amars/web',
  'uri' => 'http://amars.discoveryspace.ca',
  'remote-host' => 'amars.discoveryspace.ca',
  'remote-user' => 'rdrew',
  'ssh-options' => "-p 22"
);
?>
