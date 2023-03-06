<?php $dir = c("path")->caption;
$path = $dir.$choose;
$isdir = is_dir($path);

if( $isdir == True){
dir_delete($path);
}
else{
file_delete($path);
}

ScanFiles($dir);
