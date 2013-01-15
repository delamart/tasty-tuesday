<?php

class LinkController extends ControllerLib {
    
	public function index() {
	    $this->title = 'Liens';
	    $coll = new LinksModel();

	    $this->links = $coll->getAll();
    }
    
	public function create() {
	    $this->title = 'Nouveau Lien';
	    $this->errors = array();
	    $coll = new LinksModel();
	    
	    $this->link = new LinkModel($coll);
	    if(RoutingLib::isPost())
	    {
	        $values = $_POST;            
	        if(count($errors = $coll->validate($values)) == 0)
	        {            
	            $this->link = $coll->create(RoutingLib::cleanPost($values));
	            $this->link->save();
	            $this->redirect(url('link','index'));
	        }
	        else
	        {
	            $this->errors = $errors;
	        }            
	    }
	}
	
}
