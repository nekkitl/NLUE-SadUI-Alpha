<?php $maxi = c("Form1")->windowState;

if ($maxi == "wsMaximized"){
c("Form1")->windowState = wsNormal;
repaint();
}
else{
c("Form1")->windowState = wsMaximized;
repaint();
}
