<?php if(c("fontDlg1")->execute()){
 c("richEdit1")->fontName = c("fontDlg1")->font->name;
 c("richEdit1")->fontSize = c("fontDlg1")->font->size;
 c("richEdit1")->fontColor = c("fontDlg1")->font->color;
 c("richEdit1")->fontStyle = c("fontDlg1")->font->style;

 $style = c("fontDlg1")->font->style;
 $fs = array("fsUnderline"=>"0",
             "fsStrikeOut"=>"0",
             "fsItalic"=>"0",
             "fsBold"=>"0");

 foreach($style as $k=>$v){
  if($v){$fs[$v] = true;}
 }
 foreach($fs as $k=>$v){
  $eval .= 'c("richEdit1")->'.substr($k, 2).' = '.$v.';' ._BR_;
 }
 eval($eval);
}
