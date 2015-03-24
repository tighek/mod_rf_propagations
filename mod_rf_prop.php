<?php
/**
 * 
 * mod_rf_proagations Module Entry Point
 * 
 * @package		RF Propagations for Joomla! 3.x
 * @version		$Id: mod_rf_prop.php 2015-03-22 12:45:00Z T Kuykendall NK4I $
 * @author		T Kuykendall NK4I
 * @copyright	Copyright (C) 2015 - T Kuykendall NK4I
 * @license		GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

require_once( dirname(__FILE__).'/helper.php' );
 
$rfprop = modRFPROPHelper::getRFProp( $params );
require( JModuleHelper::getLayoutPath( 'mod_rf_prop' ) );
?>