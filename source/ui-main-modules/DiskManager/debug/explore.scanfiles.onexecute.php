<?php c("path")->text = $path;
$files = scandir($path);
unset ($files[0]);
c("files")->text = $files;
