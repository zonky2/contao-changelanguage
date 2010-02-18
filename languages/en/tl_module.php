<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Felix Pfeiffer : Neue Medien 2008 / Andreas Schempp 2009
 * @author 	   Felix Pfeiffer <info@felixpfeiffer.com>, Andreas Schempp <andreas@schempp.ch>
 * @license	   LGPL
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['useImages']			= array('Use images', 'Click here if you want to use country flags. Otherwise the language shortcut will be used (upper case).');
$GLOBALS['TL_LANG']['tl_module']['hideActiveLanguage']	= array('Hide active language', 'Please check here if you want to hide the active language on your site.');
$GLOBALS['TL_LANG']['tl_module']['keepUrlParams']		= array('Keep URL parameters', 'Please check here if you want to preserve URL parameters when switching the language.');
$GLOBALS['TL_LANG']['tl_module']['customLanguage']		= array('Custom language texts', 'Please check here if you want to have custom texts for your languages (not uppercase language shortcuts). Please be aware that this will be ignored if you enable country flags.');
$GLOBALS['TL_LANG']['tl_module']['customLanguageText']	= array(' ', 'Please enter a replacement for every language. Use lower case shortcuts. Sort order is ignored.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_module']['opDefault']	= '';
$GLOBALS['TL_LANG']['tl_module']['opGroup']		= '';
$GLOBALS['TL_LANG']['tl_module']['opValue']		= 'Language shortcut';
$GLOBALS['TL_LANG']['tl_module']['opLabel']		= 'Replacement text';
