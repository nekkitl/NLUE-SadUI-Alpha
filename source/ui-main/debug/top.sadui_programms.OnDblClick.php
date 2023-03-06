<?php $selected = c("sadui_programms")->items->selected;
$dir = "/configs/apps/".$prog_temp_dir.$prog_temp_category."cfg.sadui";
ini::open($dir);
ini::read($selected, "path", $path);
run($path, false);

file_put_contents('cache/history.sadui', PHP_EOL .date("d M: ").$selected, FILE_APPEND);
$history = file_get_contents("cache/history.sadui");
c("sadui_history")->text = $history;
