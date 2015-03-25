<?php
/**
 * @package		RF Propagations for Joomla! 3.x
 * @version		$Id: mod_rf_prop.php v1.2 $
 * @author		Tighe Kuykendall
 * @copyright	Copyright (C) 2015 - Tighe Kuykendall
 * @license		GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

class modRFPROPHelper
{
    public static function getRFProp( $params )
    {
			$align = $params->get( 'align' );
			if ($align == "1") {
				$align = "left";
				}
			elseif ($align =="2") {
				$align = "center";
				}
			elseif ($align == "3") {
				$align = "right";
				}
			$xray = $params->get( 'xray' );
			$geomag = $params->get( 'geomag' );
			$d_region = $params->get( 'd_region' );
			$sunspots = $params->get( 'sunspots' );
			$bands = $params->get( 'bands' );
			$created_by = $params->get( 'created_by' );
			echo '<table><tr><td align="'.$align.'">';
			if ($xray == "1") {
				echo '<br>Solar X-rays<br><a href="http://www.n3kl.org/sun/noaa.html" target="_blank"><img src="http://www.n3kl.org/sun/images/status.gif" width="121" height="21" border="0" ALT="X-Rays"></a><br>';
				}
			if ($geomag == "1") {
				echo '<br>Geomagnetic field<br><a href="http://www.n3kl.org/sun/noaa.html" target="_blank"><img src="http://www.n3kl.org/sun/images/kpstatus.gif" width="121" height="21" border="0" ALT="Geomagnetic"></a><br>';
				}
			if ($d_region == "1") {
				echo '<br>D-Region Prediction<br><a href="http://services.swpc.noaa.gov/images/animations/drap_global/latest.png" target="_blank"><img src="http://services.swpc.noaa.gov/images/animations/drap_global/latest.png" width="121" height="60" border="0" ALT="D-Redion"></a><br>';
				}
			if ($bands == "1") {
				echo '<br>Bands<br><a href="http://www.hamqsl.com/solar.html" target="_blank"><img src="http://www.hamqsl.com/solarbc.php" width="121" height="21" border="0" ALT="Bands"></a><br>';			
				}
			if ($sunspots == "1") {
				echo '<br>Sun Spots<br><a href="http://www.solarham.net/pictures/archive/mar22_2015_disk.jpg" target="_blank"><img src="http://www.solarham.net/pictures/archive/mar22_2015_disk.jpg" width="121" height="21" border="0" ALT="Sun Spots"></a><br>';
				}
    		if ($created_by == "1") {
				echo '<br>Created by <a href="http://www.NK4I.com" target="_new"><b>NK4I</b></a>';
				}
			echo '</td></tr></table>';
    }
}
?>