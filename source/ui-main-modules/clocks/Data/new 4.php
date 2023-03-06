<?
if( c("view")->itemIndex == 0 ){
FOR($i=1;$i> 0;$i++){
if( !is_file( "Data\scripts\out-$i.script")){
global $m;
$m=$i;
$i=-1;
}
}
$aaa = c("wiv")->text;
$aaa = str_ireplace('>','>String:', $aaa);
$d = explode( '>', $aaa );
$d2 ='String:'.implode('<', $d);
$rr = explode('<', $d2);
$result = implode('
',$rr);
$hk = c("HotKey")->caption;
file_put_contents("Data/scripts/out-$m.script","$hk::{$result}return");

file_put_contents("Data\List.txt", file_get_contents("Data\List.txt")."
Вывод	". c("HotKey")->caption.'	'. "out-$m.script".'	'. c("description")->text. '	true');


}