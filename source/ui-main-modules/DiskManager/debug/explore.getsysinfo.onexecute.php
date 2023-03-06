<?php 
c("l_winver")->caption = osinfo_winver();
c("l_dotnet")->caption = osinfo_dotnet();
c("l_macad")->caption  = osinfo_macaddress();
c("l_syslang")->caption = osinfo_syslang();
c("l_compname")->caption = osinfo_computername();
c("l_username")->caption = osinfo_username();

$alpha = array();
for($i = 'A'; $i < 'Z'; $i++){
        if ( osinfo_drivetype($i.':\\') != 1 )
                $alpha[] = $i;
}

$drives = c("c_drives");
$drives->text = $alpha;
c("disk_count")->caption = $drives->items->count;
