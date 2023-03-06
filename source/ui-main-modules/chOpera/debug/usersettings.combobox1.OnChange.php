<?php $data_dir = DOC_ROOT.'data/';
$ses = explode("\n",file_get_contents($data_dir.'search.txt'));
$i = c("combobox1")->itemIndex;
$exp = explode('|',$ses[$i]);
c("edit1")->text = trim($exp[1]);
