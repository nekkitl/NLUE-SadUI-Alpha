<?
class Check{
	public static function getURL($url){
		return 'http://api.vk.com/method/utils.checkLink?url='.urlencode($url);
	}
	
	public static function getRes($text){
		$d = json_decode($text);
		return (isset($d['response']['status']) && $d['response']['status']=='banned')?false:true;
	}
}