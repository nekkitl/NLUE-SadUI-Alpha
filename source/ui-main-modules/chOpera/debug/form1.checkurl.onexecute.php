<?php l("checkURL($url);");

$ch = curl_init('http://api.vk.com/method/utils.checkLink?url='.urlencode($url));
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$text = curl_exec($ch);
if($text===false){
    l("checkURL: timeout");
    $return = true;
}
else{
    $d = json_decode($text, true);
    $return = (isset($d['response']['status']) && $d['response']['status']=='banned')?false:true;
}


l("checkURL: return ".var_export($return,1));
return $return;
