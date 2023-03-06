<?php $selected = c("sadui_programms")->items->selected;
$dir = "/configs/apps/".$prog_temp_dir.$prog_temp_category."cfg.sadui";
ini::open($dir);
ini::read($selected, "path", $path);
c("link_name")->text = $selected;
c("link_path")->text = $path;

if( $prog_temp_category == "Inet/"){ c("link_category")->inText = "Inet"; }
if( $prog_temp_category == "Office/"){ c("link_category")->inText = "Office"; }
if( $prog_temp_category == "Media/"){ c("link_category")->inText = "Media"; }
if( $prog_temp_category == "Graphics/"){ c("link_category")->inText = "Graphics"; }
if( $prog_temp_category == "Programming/"){ c("link_category")->inText = "Programming"; }
if( $prog_temp_category == "Misc/"){ c("link_category")->inText = "Misc"; }
if( $prog_temp_category == "Games/"){ c("link_category")->inText = "Games"; }
