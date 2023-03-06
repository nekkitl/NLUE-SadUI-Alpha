<?php readRegKey(HKEY_CURRENT_USER, "Software\\Microsoft\\Windows\\CurrentVersion\\Internet Settings\\ProxyEnable", $on, BOOL);
readRegKey(HKEY_CURRENT_USER, "Software\\Microsoft\\Windows\\CurrentVersion\\Internet Settings\\ProxyServer", $ip, STRING);
ini::read("main", "proxyDetect", $proxy);

if($proxy==='1'){
    c("sysProxy")->caption = 'Enabled';
    c("sysProxy")->font->color = clGreen;
    c("useProxy")->enabled = true;
}
else{
    c("useProxy")->enabled = false;
    c("sysProxy")->caption = 'Disabled';
    c("sysProxy")->font->color = clRed;
}

c("useProxy")->checked = $on;
c("proxyIP")->text = $ip;
