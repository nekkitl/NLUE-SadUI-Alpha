<?php c("link_dlg")->title = "Select something to create link";
$result = c("link_dlg")->execute();
if ($result){
$path = c("link_dlg")->fileName;
c("link_path")->text = $path;   }
