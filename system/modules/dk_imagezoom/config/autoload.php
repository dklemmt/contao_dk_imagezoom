<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package   imagezoom
 * @author    Dirk Klemmt
 * @license   MIT
 * @copyright Dirk Klemmt 2013
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Dirch',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Dirch\imagezoom\ImageZoom'			=> 'system/modules/dk_imagezoom/classes/ImageZoom.php',

	// Elements
	'Dirch\imagezoom\ContentImageZoom'	=> 'system/modules/dk_imagezoom/elements/ContentImageZoom.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_imagezoom'		=> 'system/modules/dk_imagezoom/templates/elements',
	'js_imagezoom'		=> 'system/modules/dk_imagezoom/templates/jquery'
));
