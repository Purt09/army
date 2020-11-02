<?php
/**
 * @var array $options
 * @var array $plugin
 */

define('ELFINDER_IMG_PARENT_URL', \frontend\modules\fileManager\Assets::getPathUrl());

// run elFinder
$connector = new elFinderConnector(new \frontend\modules\fileManager\elFinderApi($options, $plugin));
$connector->run();