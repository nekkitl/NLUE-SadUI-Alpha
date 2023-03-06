<?php $dir = $prog_temp_dir.$prog_temp_category."cfg.sadui";
$cfg = "configs/apps/".$dir;
ini::open($cfg);
ini::readSections($ress);
c("sadui_programms")->text = $ress;
