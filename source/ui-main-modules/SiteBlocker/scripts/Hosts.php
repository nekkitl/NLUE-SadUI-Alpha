<?php

class Hosts{
	
	function Get(){
		$file = file('C:\Windows\System32\drivers\etc\hosts');
		$count = count($file);
		c("hosts")->text = null;
		for($i = 1; $i < $count; $i++){
			if(!preg_match('/#/', $file[$i]) and !($file[$i] == _BR_)){
				c("hosts")->text .= str_replace('127.0.0.1 ', '', $file[$i]);
			}
		}	
	}

	function Block(){
		$arr = array('http://', 'https://');
		c("site")->text = str_replace($arr, '', c("site")->text);
		file_put_contents('C:\Windows\System32\drivers\etc\hosts', file_get_contents('C:\Windows\System32\drivers\etc\hosts') . '127.0.0.1 ' . c("site")->text . _BR_);
		Hosts::Get();
	}

	function Delete(){
		$site = c('Main->hosts')->items->selected;
		$file = file('C:\Windows\System32\drivers\etc\hosts');
		$count  = count($file);
		for($i = 1; $i < $count; $i++){
			if(preg_match("/$site/", $file[$i])){
				unset($file[$i]);
			}
		}
		file_put_contents('C:\Windows\System32\drivers\etc\hosts', $file);
		Hosts::Get();
	}
}

?>