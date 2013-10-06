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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['imagezoom'] = '{type_legend},type,headline;{source_legend},singleSRC;{image_legend},alt,title,size,imagemargin,imageUrl,fullsize,caption;{imagezoom_legend},dk_imgzOn,dk_imgzDuration;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['dk_imgzOn'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_imgzOn'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('mouseover', 'grab', 'click', 'toggle'),
	'eval'				=> array('tl_class' => 'clr w50'),
	'sql'				=> "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['dk_imgzDuration'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['dk_imgzDuration'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('maxlength' => 4, 'rgxp' => 'digit', 'tl_class' => 'w50'),
	'sql'				=> "smallint(4) NOT NULL default '120'"
);
