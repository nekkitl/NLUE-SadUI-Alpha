<?php global $keyvoice;
global $patch;

if( file_exists( "Data/Options.ini" ) ){
ini::open("Data/Options.ini");
ini::read("Time", "keyvoice", $keyvoice);
}else{
$ini = "[Time]
keyvoice=113

[Widget]
onTop=1
enab=0
x=300
y=40

[Voice]
type=0
interval=2
intervalenab=1

";
file_put_contents("Data/Options.ini", $ini);
}

if( $keyvoice == "" ){
if( file_exists( "Data/Options.ini" ) ){
ini::open("Data/Options.ini");
ini::read("Time", "keyvoice", $keyvoice);
}
}elseif( $keyvoice ){
ini::open("Data/Options.ini");
ini::write("Time", "keyvoice", $keyvoice);
ini::open("Data/Keys.ini");
ini::read("keys", $keyvoice, $key);
c("label3")->caption = "Клавиша: $key(".$keyvoice.")";
}



ini::open("Data/Options.ini");
ini::read("Widget", "onTop", $p1);
ini::read("Widget", "enab", $p2);
ini::read("Voice", "type", $p3);
ini::read("Voice", "interval", $p4);
ini::read("Voice", "intervalenab", $p5);
ini::read("Voice", "Ron", $p6);
ini::read("Voice", "Rone", $p7);
ini::read("Time", "keyvoice", $keyvoice);

if( $p5 == 1 ){
c("checkbox1")->checked = 1;
c("radioGroup1")->enabled = 1;
}else{
c("checkbox1")->checked = 0;
}
if( $p1 == 1 ){
c("checkbox5")->checked = 1;
}else{
c("checkbox5")->checked = 0;
}
if( $p2 == 1 ){
c("checkbox4")->checked = 1;
}else{
c("checkbox4")->checked = 0;
}
if( $p7 == 1 ){
c("checkbox3")->checked = 1;
c("combobox1")->enabled = 1;
}else{
c("checkbox3")->checked = 0;
c("combobox1")->enabled = 0;
}
c("radioGroup1")->itemIndex = $p3;

c("radioGroup2")->itemIndex = $p4;

global $patch;


dir_search($patch."/watch/", $files, ".mp3", true, true);
foreach ($files as $file){ 
   if (strpos($file, 'seichas')!==false){ 
$file1 = basename($file);
        c("combobox1")->items->add($file1);
   }
}
c("combobox1")->inText = $p6;

if( c("combobox1")->inText ){
}else{
c("combobox1")->itemIndex = 0;
}
