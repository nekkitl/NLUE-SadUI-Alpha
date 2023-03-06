<?php $data_dir = DOC_ROOT.'data/';
if(file_exists($data_dir.'settings.ini')){
    //ini::open($data_dir.'settings.ini');
    ini::read("main", "ua", $ua);
    ini::read("main", "cache", $cache);
//    ini::read("main", "log", $log);
    ini::read("main", "proxyDetect", $proxy);

    c("cache")->checked = ($cache=='1');
    c("proxyCheck")->checked = ($proxy=='1');
    c("ua")->text = urldecode($ua);
}
else{
    MessageBox("Восстановите удалённый файл settings.ini !", "Внимание ");
    HideForm(c('settingsForm'), SW_SHOW);
}

