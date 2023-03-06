<?php global $cv;
global $cvcnt;
$cvcnt = 0;
$cv = new TControlCanvas( c("image1") );
$cv->clear();
$cv->brush->color = clBlack;
c("Form1")->doubleBuffered = true;
