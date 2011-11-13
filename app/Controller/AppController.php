<?php
class AppController extends Controller {
    public $components = array('Auth', 'RequestHandler');       
    public $permissions = array();     
    public $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {    
    
		$this->Auth->authorize = array('Controller');
    
        //Configure AuthComponent
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
    }
    
    function isAuthorized(){ 
    	debug($this->Auth->user());
		
        if($this->Auth->user('role_id') == '1'){
			return true; //Remove this line if you don't want admins to have access to everything by default
		}			 
        if(!empty($this->permissions[$this->action])){ 
            if($this->permissions[$this->action] == '*') return true; 
            if(in_array($this->Auth->user('group'), $this->permissions[$this->action])) return true; 
        } 

        return false; 
         
    }     
}
