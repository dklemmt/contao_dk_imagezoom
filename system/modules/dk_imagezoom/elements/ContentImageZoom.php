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
 * Namespace
 */
namespace Dirch\imagezoom;


/**
 * Class ContentImageZoom
 *
 * Front end content element "imagezoom".
 *
 * @copyright  Dirk Klemmt 2013
 * @author     Dirk Klemmt
 * @package    imagezoom
 */
class ContentImageZoom extends \ContentImage
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_imagezoom';


	/**
	 * JS Template
	 * @var string
	 */
	protected $strTemplateJs = 'js_imagezoom';


	/**
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		// --- create FE template for javascript caller
		$objTemplateJs = new \FrontendTemplate($this->strTemplateJs);
		
		// (unique) Element id will be used for unique HTML id element
		$objTemplateJs->id = $this->id;
		$objTemplateJs->singleSRC = $this->singleSRC;

		// Zoom option 'on': default value is 'mousover'
		if (isset($this->dk_imgzOn) && $this->dk_imgzOn != 'mousover')
		{
			$objTemplateJs->on = 'on: "' . $this->dk_imgzOn . '"';
		}

		// Zoom option 'duration': default value is 120
		if ($this->dk_imgzDuration != '120')
		{
			$objTemplateJs->duration = 'duration: ' . $this->dk_imgzDuration;
		}

		// ... global css file
		$GLOBALS['TL_CSS'][] = 'system/modules/dk_imagezoom/assets/css/imagezoom.css||static';

		// ... the zoom javascript itselfs
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/dk_imagezoom/assets/js/jquery.zoom-min.js|static';

		// ... element dependent javascript caller
		$GLOBALS['TL_JQUERY'][] = $objTemplateJs->parse();					

		return parent::compile();
	}
}
