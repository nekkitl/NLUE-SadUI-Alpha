<?php $data_dir = DOC_ROOT.'data/';

if( $key == 13 and trim($self->inText)<>'' ){
    $text = $self->inText;
    
    //ini::open($data_dir.'settings.ini');
    ini::read("search", "avaliable", $on);
    
    if($on=='1' and (stripos($text,' ')!==false || (stripos($text,'.')===false and stripos($text,'://')===false)) || strlen($text)<3){
    
        ini::read("search", "url", $search);
        $search = urldecode($search);
        $text = str_replace('%s',urlencode(iconv('windows-1251','UTF-8',$text)),$search);
        
        l('URL: search phrase input, replace for '.$text);
    }
    else{
        l('URL: input website address '.$text);
        $arr = array_merge(array($text),c("Form1->combobox1")->items->strings);
        c("Form1->combobox1")->text = array_unique($arr);
    }
    
    c("Form1->pages1")->activePage->chrom->load($text);
}
