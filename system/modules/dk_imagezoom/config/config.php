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
 * Content elements
 */
array_insert($GLOBALS['TL_CTE'], 3, array
(
	'media' => array
	(
		'imagezoom' => 'imagezoom\ContentImageZoom'
	)
));
