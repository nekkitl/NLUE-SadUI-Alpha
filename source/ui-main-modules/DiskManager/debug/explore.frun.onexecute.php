<?php $dir = c("path")->caption;
$path = $dir.$choose;
$isdir = is_dir($path);
message($path);
run($path, false);
