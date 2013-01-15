<?php

class LinksModel extends CollectionDbLib {
    
     protected function init()
     {
         $this->obj_class = 'LinkModel';
         $this->table = 'link';
         $this->pk_column = 'id';
         $this->columns = array('id', 'title', 'url', 'img', 'created');
         parent::init();
     }
     
     
     /*
     
        $url = "http://www.baikasblog.com/2013/01/loeuf-dans-lalimentation-du-chien.html";
        $get = file_get_contents($url,false,null,-1,5120);
		
		$title = (preg_match('~<title>([^<]+)</title>~i',$get,$matches) === 1) ? $matches[1] : null;

        $img = null;
        if(
                (preg_match('~<link.*rel="image_src".*>~i',$get,$mm) === 1) &&
                (preg_match('~.*href="([^"]+)".*~i',$mm[0],$matches) === 1)
        )
        {
                $img = isset($matches[1]) ? $matches[1] : null;
        }
             
     */
     
}