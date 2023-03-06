<?php $disc .= ':\\';
c("type1")->caption = getDiskType( osinfo_drivetype($disc) );
c("sn1")->caption = osinfo_diskserial( $disc );

$size = osinfo_disktotal( $disc );
$size = $size ? $size : 1;
c("volume1")->caption = number_format(($size / 1024) / 1024 / 1024, 2) . ' GB Total';
        
$size = osinfo_diskfree( $disc );
$size = $size ? $size : 1;
c("free1")->caption = number_format(($size / 1024) / 1024 / 1024, 2) . ' GB Free';

if( c("volume1")->caption == "-0.00 GB Total"){
c("type1")->caption = "Unknown";
c("volume1")->caption = "...";
c("free1")->caption = "...";
c("sn1")->caption = "...";
}

$res = c("type1")->caption;

switch($res){
	case 'None':
		c("img_HardDrive")->visible 		= false;
		c("img_Network")->visible 			= false;
		c("img_Flash")->visible 			= false;
		c("img_none_or_unknown")->visible 	= true;
		c("img_CDDISK")->visible            = false;
		c("img_RAMDisk")->visible           = false;
	break;
	
	case 'Unknown':
		c("img_HardDrive")->visible 		= false;
		c("img_Network")->visible 			= false;
		c("img_Flash")->visible 			= false;
		c("img_none_or_unknown")->visible 	= true;
		c("img_CDDISK")->visible            = false;
		c("img_RAMDisk")->visible           = false;
	break;
	
	case 'Flash':
		c("img_HardDrive")->visible 		= false;
		c("img_Network")->visible 			= false;
		c("img_Flash")->visible 			= true;
		c("img_none_or_unknown")->visible 	= false;
		c("img_CDDISK")->visible            = false;
		c("img_RAMDisk")->visible           = false;
	break;
	
	case 'Hard Drive':
		c("img_HardDrive")->visible 		= true;
		c("img_Network")->visible 			= false;
		c("img_Flash")->visible 			= false;
		c("img_none_or_unknown")->visible 	= false;
		c("img_CDDISK")->visible            = false;
		c("img_RAMDisk")->visible           = false;
	break;
	
	case 'Network':
		c("img_HardDrive")->visible 		= false;
		c("img_Network")->visible 			= true;
		c("img_Flash")->visible 			= false;
		c("img_none_or_unknown")->visible 	= false;
		c("img_CDDISK")->visible            = false;
		c("img_RAMDisk")->visible           = false;
	break;
	
	case 'CD-ROM':
		c("img_HardDrive")->visible 		= false;
		c("img_Network")->visible 			= false;
		c("img_Flash")->visible 			= false;
		c("img_none_or_unknown")->visible 	= false;
		c("img_CDDISK")->visible            = true;
		c("img_RAMDisk")->visible           = false;
	break;
	
	case 'RAM Disk':
		c("img_HardDrive")->visible 		= false;
		c("img_Network")->visible 			= false;
		c("img_Flash")->visible 			= false;
		c("img_none_or_unknown")->visible 	= false;
		c("img_CDDISK")->visible            = false;
		c("img_RAMDisk")->visible           = true;
	break;
}
