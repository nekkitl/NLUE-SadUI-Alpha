<?
class Proc{
	public static $data;
	public static function Set($var, $val){
		self::$data[$var] = $val;
	}
	public static function Get($var){
		return isset(self::$data[$var])?self::$data[$var]:NULL;
	}
	
	public static function Func($file){
		$f = fopen($file, 'w+');
		return function($ch, $byte) use ($f, $file){
			if(Proc::Get($file)!=='stop'){
				fwrite($f, $byte);
				return strlen($byte);
			}else{
				fclose($f);
				return false;
			}
		};
	}
	
	public static function GetMouseDownFunc(){
		return function($self, $button, $shift, $x, $y){
			return alert('click '.$button.', '.$shift);
		};
	}
}