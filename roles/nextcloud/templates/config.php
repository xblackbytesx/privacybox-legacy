<?php
$CONFIG = array (
  'instanceid' => '',
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' =>
  array (
    0 => '{{ privacybox_domain }}',
  ),
  'datadirectory' => '/media/cloud',
  'overwrite.cli.url' => 'https://{{ privacybox_domain }}',
  'dbtype' => 'mysql',
  'version' => '13.0.1.1',
  'dbname' => '{{ nc_db_name }}',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'nc_',
  'dbuser' => '{{ nc_db_user }}',
  'dbpassword' => '{{ nc_db_password }}',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'filelocking.enabled' => true,
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => '/var/run/redis/redis.sock',
    'port' => 0,
    'timeout' => 0.0,
  ),
  'logtimezone' => 'UTC',
  'installed' => true,
  'maintenance' => false,
  'updater.release.channel' => 'stable',
  'theme' => '',
  'loglevel' => 2,
);
