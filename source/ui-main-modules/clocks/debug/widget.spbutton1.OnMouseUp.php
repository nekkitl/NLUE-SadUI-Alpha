<?php c('timer1')->enable = 0;

ini::open("Data/Options.ini");
ini::read("Widget", "x", $xw);


$xw = $SCREEN->width - c("Widget")->x;
ini::write("Widget", "x", $xw);
ini::write("Widget", "y", c("Widget")->y);

if( c("Widget")->x + c("Widget")->w >= $SCREEN->width ){
if( c("panel1")->x < 100 ){
$num1 = 26;
}else{
$num1 = 0;
}
c("panel1")->x = -26 + $num1;
c("spButton3")->caption = "w";
}else{
if( c("panel1")->x < 100 ){
$nu = 26;
}else{
$nu = "0";
}
c("panel1")->x = 265 + $nu;
c("spButton3")->caption = "v";

}
