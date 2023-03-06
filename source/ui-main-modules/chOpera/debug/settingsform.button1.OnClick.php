<?php     $data_dir = DOC_ROOT.'data/';

    //ini::open($data_dir.'settings.ini');
    
    ini::write("main", "ua", urlencode((strlen(c("ua")->text)>0)?c("ua")->text:detectUA()),true);
    ini::write("main", "cache", (c("cache")->checked?1:0),true);
   // ini::write("main", "log", (c("log")->checked?1:0),true);
    ini::write("main", "proxyDetect", (c("proxyCheck")->checked===true?'1':'0'),true);

    ini::open($data_dir.'settings.ini');
    
    MessageBox("Изменения вступят в силу после перезагрузки браузера!", "Сохранено");
    HideForm(c('settingsForm'), SW_SHOWMODAL);
