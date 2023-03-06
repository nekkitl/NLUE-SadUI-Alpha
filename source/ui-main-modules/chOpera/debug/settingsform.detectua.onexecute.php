<?php $data_dir = DOC_ROOT.'data/';
ini::open($data_dir.'settings.ini');
ini::read("engine", "version", $vers);
ini::read("engine", "chromium", $chvers);

//return 'Mozilla/5.0 (Windows NT '.osinfo_winver().' '.osinfo_syslang().') AppleWebKit/537.36 (KHTML, like Gecko) Chrome/'.$chvers.' chOpera/'.$vers;
return 'chOpera/'.$vers.' (Windows NT '.osinfo_winver().'; '.osinfo_syslang().') based on Chrome/'.$chvers;
