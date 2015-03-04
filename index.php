<?php

// Use Composer autoloader
require(realpath('vendor') . '/autoload.php');

$stanza = array('enabled' => 'on');
$config = new Feature_Config('facebook_features', $stanza, new Feature_World(array()));

var_dump($config->isEnabled('facebook_features'));