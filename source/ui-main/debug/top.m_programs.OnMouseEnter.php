<?php ini::open("configs/packages.sadui");
ini::readSections($sections);
c("sadui_programms")->text = $sections;

$history = file_get_contents("cache/history.sadui");
c("sadui_history")->text = $history;

c("menu_power")->visible = false;
c("m_sub_main")->transparent = true;
$self->transparent = false;
c("m_settings")->transparent = true;
c("menu_settings")->visible = false;
c("menu_programs")->visible = true;
