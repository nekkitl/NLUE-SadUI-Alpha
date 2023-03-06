<?php $r = new TRegistry;
$r->RootKey(HKEY_CLASSES_ROOT);
$r->OpenKey(".vt",1);  //mytxt разрешение файла
$r->WriteString("","vt");
$r->CloseKey();

$r->OpenKey("vt",1);
$r->WriteString("","vt");
$r->OpenKey("DefaultIcon",1);
$r->WriteString("",DOC_ROOT."/Data/vtfile.ico"); // путь к иконке
$r->CloseKey();

//$r->OpenKey("mytxt\\Shell",1);
//$r->WriteString("","Open");
//$r->OpenKey("Open",1);
//$r->OpenKey("command",1);
//$r->WriteString("","\"C:\\windows\\notepad.exe\" \"%1\""); // путь к проге
//$r->CloseKey();
$r->Free();
