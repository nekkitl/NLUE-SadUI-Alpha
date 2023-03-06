<?php err_no();

$cd = c("icons->cd");
$app  = c("icons->app");
$audio  = c("icons->audio");
$blank  = c("icons->blank");
$icofile  = c("icons->file");
$doc  = c("icons->doc");
$font  = c("icons->font");
$help  = c("icons->help");
$packed  = c("icons->pack");
$pic = c("icons->pic");
$sys = c("icons->system");
$text = c("icons->text");
$video = c("icons->video");
$folder = c("icons->folder");

$path = c("path")->caption;
$selected = c("files")->items->selected;

$size = filesize($path.$selected);
$file = is_file($path.$selected);
$time = filectime($path.$selected);
$owner = fileowner($path.$selected);

if ( $file == False){
c("file_type")->caption = "Folder";
c("file_size")->caption = "...";
c("file_dot")->caption = "";
c("file_time")->caption = "";
c("file_owner")->caption = "";
$folder->picture->copyToClipboard();
c("file_format")->picture->pasteFromClipboard();
}

else{
c("file_type")->caption = "File";
c("file_time")->caption = $time;
c("file_owner")->caption = $owner;

if ( $size < 1024){
c("file_size")->caption = $size ." bytes";
c("file_type")->caption = "Small File";
}
if( $size < 0){
c("file_type")->caption = "System";
c("file_size")->caption = "System";
}
if ( $size > 1024){
$rsize = number_format(($size / 1024) , 2);
c("file_size")->caption = $rsize." KB";
}
if ( $size > 1048576){
$rsize = number_format(($size / 1024) / 1024, 2);
c("file_size")->caption = $rsize." MB";
}
if ( $size > 1073471824){
$rsize = number_format(($size / 1024) / 1024 / 1024, 2);
c("file_size")->caption = $rsize." GB";
}
if( $size == false){
c("file_size")->caption = "...";
}

}
