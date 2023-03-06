<?php 
            ini::read("main", "ua", $ua);
            ini::read("main", "cache", $cache);
            ini::read("main", "version", $version);
            ini::read("main", "locale", $locale);
           // ini::read("main", "log", $log);
            ini::read("main", "plugins", $plugins);
            ini::read("main", "localeStorage", $localeStorage);
            ini::read("main", "sessionStorage", $sessionStorage);
            ini::read("main", "jsFlags", $jsFlags);
            ini::read("main", "proxyDetect", $proxyDetect);
            //$self->options->imageLoadDisabled = true;
//return;
            chromium_settings(
                        ($cache=='1'?DOC_ROOT.'cache':''),
						urldecode($ua),
						$version,
						$locale,
						false,
						$plugins,
						$localeStorage,
						$sessionStorage,
						(int)$jsFlags,
                        ($proxyDetect=='1')
				);
				l('Chromium loaded! Proxy:'.var_export($proxyDetect=='1',1));
				
				
            


//$self->options->imageLoadDisabled = true;
