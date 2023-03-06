<?php 
c("image1")->loadFromFile("Data/voiceb.bmp");
if( file_exists( "Data/Options.ini" ) ){
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
Ron=seichas_1.mp3
Rone=1


";
file_put_contents("Data/Options.ini", $ini);
}








c("trayIcon1")->text = "Виджет Говорящие часы запущены...";
c("trayIcon1")->showBalloonTip();
$x = $SCREEN->width;
		$y = $SCREEN->height;

	
		$a = true;
		c("label2")->caption = date('H');

   	c('label3')->caption = date(':i:s');
   	
   	if( file_exists("Data/Lang/yes.txt") ){
   	$ra = file_get_contents("Data/Lang/yes.txt");
   			$r1 = date('l');
   			ini::open("Data/Lang/$ra.ini");
   			ini::read("days_of_the_week", $r1, $go1);
$r2 = date('F');
            ini::open("Data/Lang/$ra.ini");
            ini::read("months", $r2, $go2);
$r3 = date('j');



c('label4')->caption = "$go1 $r3 $go2";

   	}else{

		$r1 = date('l');
		
$r2 = date('F');
$r3 = date('j');
c('label4')->caption = "$r1 $r3 $r2";
}

global $keyvoice;
ini::open("Data/Options.ini");
ini::read("Widget", "onTop", $p1);
ini::read("Widget", "enab", $p2);
ini::read("Voice", "type", $p3);
ini::read("Voice", "interval", $p4);
ini::read("Voice", "intervalenab", $p5);
ini::read("Time", "keyvoice", $keyvoice);
ini::read("Widget", "x", $xw);
ini::read("Widget", "y", $yw);
ini::read("Widget", "color", $col);
ini::read("Widget", "colorfont", $fcol);

if( $col ){
c("Widget")->color = $col;
}
if( $fcol ){
c("Widget->label2")->font->color = $fcol;
c("Widget->label3")->font->color = $fcol;
c("Widget->label4")->font->color = $fcol;
}
if( $xw == "" ){
$xw = 300;
$yw = 40;
}
	$self->x = $x - $xw;
		$self->y = $yw;



if( $p1 == 1 ){
c("Widget")->formStyle = fsStayOnTop;
}else{
c("Widget")->formStyle = fsNormal;
}
if( $p2 == 1 ){
c("Widget")->show();
}else{
c("Widget")->hide();
}
global $patch;
$patch = winLocalPath( CSIDL_APPDATA );
dir_search("Data/Voice/", $files, ".vt", true, true); // загоняем найденные файлы в $files массив
foreach ($files as $file){ // пробегаемся по массиву
   if (strpos($file, '.')!==false){ // функция поиска подстроки (name) в строке - strpos
$zip = new ZipArchive;
$zip->open($file);


$zip->extractTo($patch.'/watch/');
$zip->close();
   }
}

global $patch;
c("Options->voicep")->fileName = "$patch/watch/time.mp3";
c("Options->voicep")->play();




