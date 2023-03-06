<?php $data_dir = DOC_ROOT.'data/';

c("downloads->files")->items->saveToFile($data_dir.'downloads.txt');
c("Form1->combobox1")->items->saveToFile($data_dir.'history.txt');


$pages = c("Form1->pages1")->pages();

$save = array('pages'=>array(),'active'=>c("Form1->pages1")->pageIndex);
foreach($pages as $k=>$page){
    $url = chromium_exec($page->chrom->self, CHROMIUM_EXEC_ADDRESS, 0);
    $save['pages'][$k] = $url;
}

$t = fopen($data_dir.'tabs.txt','w+');
fwrite($t,json_encode($save));
fclose($t);
