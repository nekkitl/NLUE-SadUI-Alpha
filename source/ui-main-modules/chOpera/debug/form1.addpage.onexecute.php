<?php     global $lastClickImage, $lastClickURL, $lastDownload, $lastSelectedText;

	l('addPage("'.$url.'")');

    $localhost = DOC_ROOT.'localhost/';
    $i = count( c("Form1->pages1")->pages() );
    $page = c("Form1->pages1")->activePage = c("Form1->pages1")->addPage('Empty Tab');
    c("Form1")->caption = 'Empty Tab';
    c("Form1->pages1")->activePage->reload = false;
    $chrom = new TChromium( c("Form1") );
    $chrom->parent = $page;
    $chrom->align = alClient;
    $chrom->autoreload = false;
    $chrom->show();
    $url = (is_null($url) || $url===false || strlen($url)==0)?'about:blank':$url;
    $chrom->url = $url;
    $page->chrom = $chrom;
    $chrom->elements = 0;
    $chrom->elementsloaded = 0;
    $chrom->loadposition = 0;
    $chrom->loadstatus = 'Empty';
    $chrom->lastURL = NULL;

//chromium_prop($chrom, CHROMIUM_EXEC_SHOWDEVTOOLS, true);
   // switchTab();
   
    $chrom->onGetdownloadhandler = function($length, $url, $mime, $file, $size, &$continue ) use ($chrom){
        global $lastDownload;
        $lastDownload = array(
            'url' => $chrom->lastURL,
            'mime' => $mime,
            'file' => $file,
            'length' => $size,
        );

        $chrom->loadstatus = 'Downloading file...';
        switchTab();
    	l("onGetdownloadhandler($length, $url, $mime, $file, $size); |  lastDownload = ".var_export($lastDownload,1));

        ShowForm(c("downloadStart"), SW_SHOWMODAL);
        $continue = false;
    };

    $chrom->onbeforepopup = function($self, $url, &$continue){

	   l("onbeforepopup($url)");
	   if(stripos($url,'chrome-devtools://')!==0){
           $index = c("Form1->pages1")->pageIndex;
           addPage($url); $continue = false;
           c("Form1->pages1")->pageIndex = $index;
        }
    };

    $chrom->onaddresschange = function($self, $url) use ($chrom){
   	    l("onaddresschange = function($url))");

        $chrom->loadposition = 5;
        $chrom->loadstatus = 'Connecting...';

       /* if( c("Form1->pages1")->activePage->chrom->self == $self ){
            c("Form1->combobox1")->inText = $url;

            c("Form1->progress1")->visible = true;
            c("Form1->progress1")->position = $chrom->loadposition;
            c("Form1->statusBar1")->simpleText = $chrom->loadstatus;
        }*/
        switchTab();
    };

    $chrom->ontitlechange = function($self, $title) use ($chrom){
        l("ontitlechange($title)");
        $title = (strlen($title)==0)?$chrom->lastURL:$title;
        $self = c($self);
//        c("Form1")->caption = $title;
        //if( strlen($title) > 10 ) $title = substr($title, 0, 8).'...';
        $self->parent->caption = $title;
        $chrom->loadposition += 5;
        //$chrom->loadstatus = 'Принимаю данные';
//        switchTab();
    };

    $chrom->onbeforebrowse = function($self, $url, $method, $navType, $isRedirect, &$continue) use ($chrom, $localhost){
        l("onbeforebrowse($url, $method, $navType, $isRedirect)");
        
        if($url=='about:blank' || is_null($url) || strlen($url)==0){
            l("onbeforebrowse: return \$continue = false");
            return $continue = false;
        }

        if(stripos($url,'home://')===0){
            $filename = str_replace(array('home://','..'),array($localhost,null),$url);
            if($filename[strlen($filename)-1]=='/')$filename.='index.html';
            
            if(file_exists($filename)){
                $chrom->html = 'Home zome';
                $chrom->loadstatus = 'Home zone';
                $chrom->loadposition = 0;
                switchTab();
            
                l('Home zone '.$filename);
                $chrom->loadFile($filename, $url);
               // return $continue = false;
               return;
            }
            l('No file in home zone '.$filename);
        }

        $chrom->lastURL = $url;

        ini::read("safe", "avaliable", $on);
        if($on=='1' && stripos($url,'file:')!==0){
            $checked = checkURL($url);
            l("ontitlechange: \$checked = ".var_export($checked,1));
            if(!$checked){
                $html = file_get_contents($localhost.'banURL.html');
                $html = str_replace('<?=$url?>',$url,$html);
                $html = iconv('UTF-8','cp1251',$html);
                
                $chrom->html = 'Banned';
                $chrom->loadString($html,$url);
                //$chrom->html = $html;
                
                l("ontitlechange: return \$continue = false ");
                return $continue = false;
            }
        }
    };

    $chrom->onBeforemenu = function($self, $x, $y, $linkURL, $imageURL, $pageURL, $frameURL, $selectText, &$continue){
             l("onBeforemenu( $x, $y, $linkURL, $imageURL, $pageURL, $frameURL, $seectText)");
            global $lastClickImage, $lastClickURL, $lastSelectedText;
            $lastClickImage = $imageURL;
            $lastClickURL = $linkURL;

            if($selectText){
                c("Form1->textMenu")->popup($x, $y);
                $lastSelectedText = $selectText;
            }
            elseif($imageURL and $linkURL){
                 c("Form1->urlImageMenu")->popup($x, $y);
            }
            elseif($imageURL){
                c("Form1->imageMenu")->popup($x, $y);
            }elseif($linkURL){
                c("Form1->urlMenu")->popup($x, $y);
            }
            else c("Form1->browserMenu")->popup($x, $y);

        $continue = false;
    };

    $chrom->onLoadStart = function($self) use ($chrom){
        l("onLoadStart(".$chrom->lastURL.")");
        $chrom->elements++;
        $chrom->loadposition += 1;
        
        $chrom->loadstatus = 'Loading... ('.$chrom->elementsloaded.'/'.$chrom->elements.')';

        /*if( c("form1->pages1")->activePage->chrom->self == $self ){
            c("Form1->progress1")->position = $chrom->loadposition;
            c("Form1->statusBar1")->simpleText =  $chrom->loadstatus;
        }*/switchTab();
    };

    $chrom->onLoadEnd = function($self) use ($chrom){
        l("onLoadEnd()");
        $chrom->elementsloaded++;
        $chrom->loadposition += 5;
        $chrom->loadstatus = 'Loading... ('.$chrom->elementsloaded.'/'.$chrom->elements.')';
        
       /* if($chrom->firstLoad === true && !is_null($chrom->html) && strlen($chrom->html)>0){
            $chrom->html = preg_replace("~<img(.*)>~siU","",$chrom->html);
            $chrom->html = preg_replace("~<link(.*)>~siU","",$chrom->html);
            $chrom->html = preg_replace("~<script(.*)>~siU","",$chrom->html);
            $chrom->stopLoad();
            $chrom->loadString($chrom->html, $chrom->lastURL);
            $chrom->firstLoad = false;
        }*/


        if($chrom->elementsloaded == $chrom->elements){
                $chrom->loadstatus = 'Ready.';
                $chrom->loadposition = 100;
               // c("Form1->progress1")->visible = false;
                l("onLoadEnd: LoadUserScripts:");
                /* UserScript */
                $ujs = DOC_ROOT.'localhost/userscripts/*.js';
                $jss = glob($ujs);
                foreach($jss as $js){
                    $chrom->executeJs(file_get_contents($js));
                    l("onLoadEnd: UJS('.$js.')");
                }
            }


      /*  if( c("form1->pages1")->activePage->chrom->self == $self ){
            c("Form1->progress1")->position = $chrom->loadposition;
            c("Form1->statusBar1")->simpleText = $chrom->loadstatus;
        }*/
        switchTab();
    };

    return $chrom;
