<?php

class LinkModel extends ModelDbLib {
    
    public function __construct(CollectionDbLib $collection, array $data = array())
    {
        parent::__construct($collection, $data);
        if($this->__get('created') === null) { $this->__set('created', date('Y-m-d H:i:s')); }
    }
    
    public function date($format = 'Y-m-d H:i:s') {
        if(!$this->date) { return null; }
        return date($format,  strtotime($this->date));
    }
    
}
