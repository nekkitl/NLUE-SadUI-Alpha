<?php $text = c("files")->items->selected;
if(is_null($text) || $text===false || strlen($text)==0)return false;
$data = explode(' | ',$text);
$ex = file_exists($data[2].$data[0]);
$exd = file_exists($data[2].$data[0].'.download');

c("filename")->caption = $data[0];
c("filename")->link = $ex?'file://'.$data[2].$data[0]:NULL;
c("path")->caption = $data[2];
c("path")->link = 'file://'.$data[2];
c("url")->text = $data[3];
c("size")->caption = $data[1];

c("stat")->caption = 'Загружено';
c("button4")->enabled = true;
c("button2")->enabled = true;

$perc = 100;
$perctxt = '100%';
$speed = 'Неизвестно';
$time = 'Неизвестно';
    
if($exd){
    $d = file_get_contents($data[2].$data[0].'.download');
    if(stripos($d,'error')!==false){
        c("stat")->caption = 'Ошибка';
    }
    elseif($d=='stop'){


        c("stat")->caption = 'Остановлено';
    }
    else{


        c("stat")->caption = 'Загружается';
        $tmp = explode("\r",$d);
        $line = array_pop($tmp);
        $tmp1 = explode(' ',trim(str_replace(array('     ','    ','   ','  '),' ',$line)));
    
        $perc = $tmp1[0];
        $perctxt = $tmp1[0].'%';
        $speed = $tmp1[11];
        $time = $tmp1[8];
        c("button4")->enabled = false;
    }
}

c("loaded")->caption = $perctxt;
c("loadedbar")->position = $perc;
c("speed")->caption = $speed;
c("time")->caption = $time;

if($perc<100 || !$ex){
    c("button1")->enabled = false;
    c("button3")->enabled = true;
}else{
    c("button1")->enabled = true;
    c("button3")->enabled = false;
}

if(!$ex){
    c("stat")->caption = 'Файл удалён';
    c("stat")->font->color = '#FF0000';
    c("button3")->enabled = false;
}
