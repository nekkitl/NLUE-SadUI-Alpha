<?php $data_dir = DOC_ROOT.'data/';
$lib_dir = DOC_ROOT.'lib/';

/*** Библиотеки ***/
require_once $lib_dir."proc.php";
require_once $lib_dir.'meta/JPEG.php';
require_once $lib_dir.'meta/PictureInfo.php';
require_once $lib_dir.'meta/EXIF.php';
require_once $lib_dir.'meta/JFIF.php';
require_once $lib_dir.'meta/Photoshop_IRB.php';
require_once $lib_dir.'meta/XMP.php';
require_once $lib_dir.'meta/Photoshop_File_Info.php';

//Yandex

/*require_once $lib_dir.'yandexSaveBrowsing/SafeBrowsingClient.php';
require_once $lib_dir.'yandexSaveBrowsing/SafeBrowsingException.php';*/
require_once $lib_dir.'checkLink.php';

/*** Настройки ***/
//История URL
if(!file_exists($data_dir.'history.txt') )fclose(fopen($data_dir.'history.txt','w+'));
c("combobox1")->items->loadFromFile($data_dir.'history.txt');

//История загрузок
if(!file_exists($data_dir.'downloads.txt') )fclose(fopen($data_dir.'downloads.txt','w+'));
c("downloads->files")->items->loadFromFile($data_dir.'downloads.txt');

if(!file_exists($data_dir.'settings.ini'))die('Нет файла настроек '.$data_dir.'settings.ini');
ini::open($data_dir.'settings.ini');
