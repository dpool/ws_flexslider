<?php
namespace WapplerSystems\WsFlexslider;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Sven Wappler <typo3@wapplersystems.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * Class that adds the wizard icon.
 *
 * @author	Sven Wappler <typo3@wappler.systems>
 * @package	TYPO3
 * @subpackage 
 */
class Wizicon {

	/**
	 * Processing the wizard items array
	 *
	 * @param	array		$wizardItems: The wizard items
	 * @return	Modified array with wizard items
	 */
	function proc($wizardItems) {


		$wizardItems['plugins_tx_wsflexslider_pi1'] = array(
			'icon' => ExtensionManagementUtility::extRelPath('ws_flexslider') . 'Resources/Public/Icons/icon.png',
			'title' => LocalizationUtility::translate('list_title', 'ws_flexslider'),
			'description' => LocalizationUtility::translate('list_plus_wiz_description', 'ws_flexslider'),
			'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=wsflexslider_pi1'
		);

		return $wizardItems;
	}



}
