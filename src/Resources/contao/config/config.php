<?php

/**
 * maklermodul for Contao Open Source CMS
 *
 * Copyright (C) 2017 pdir / digital agentur <develop@pdir.de>
 *
 * @package    maklermodul
 * @link       https://www.maklermodul.de
 * @license    pdir license - All-rights-reserved - commercial extension
 * @author     pdir GmbH <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
* Backend modules
*/
if (!is_array($GLOBALS['BE_MOD']['pdir']))
{
	array_insert($GLOBALS['BE_MOD'], 1, array('pdir' => array()));
}

$assetsDir = 'bundles/pdirmaklermodul';

array_insert($GLOBALS['BE_MOD']['pdir'], 0, array
(
	'maklermodulSetup' => array
	(
		'callback'          => 'Pdir\Maklermodul\MaklermodulSetup',
		'icon'              => $assetsDir . '/img/icon.png',
		//'javascript'        =>  $assetsDir . '/js/backend.min.js',
		'stylesheet'		=>  $assetsDir . '/css/backend.css'
	),
));

if (TL_MODE == 'BE')
{
	$GLOBALS['TL_JAVASCRIPT'][] =  $assetsDir . '/js/backend.js';
}
