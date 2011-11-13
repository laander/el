<?php
App::uses('AppController', 'Controller');

class SetupaclController extends AppController {

// requesters
function addAro(){

    $aro = new Aro();
    $roles = array(
        0 => array(
            'alias' => 'Admin',        
            'model' => 'Role',
            'foreign_key' => 1,
        ),
        1 => array(
            'alias' => 'Editor',                
            'model' => 'Role',
            'foreign_key' => 2,
        ),
        2 => array(
            'alias' => 'Visitor',                
            'model' => 'Role',
            'foreign_key' => 3,
        )
    );

    //Iterate and create AROs (as children)
    foreach($roles as $data)
    {
        //Remember to call create() when saving in loops...
        $aro->create();

        //Save data
        $aro->save($data);
    }

}

// controllers
function addAco(){

    $aco = new Aco();
    $users = array(
        0 => array(
        	'id' => '1',
            'alias' => 'Application',        
        ),
        1 => array(
        	'id' => '2',
        	'parent_id' => '1',
            'alias' => 'Users',                
        ),
        2 => array(
        	'parent_id' => '2',
            'alias' => 'view', 
        ),
        3 => array(
        	'parent_id' => '2',
            'alias' => 'edit', 
        ),
        4 => array(
        	'parent_id' => '2',
            'alias' => 'delete', 
        )
    );

    foreach($users as $data)
    {
        //Remember to call create() when saving in loops...
        $aco->create();

        //Save data
        $aco->save($data);
    }

}

function perms(){
    $this->Acl->allow('Admin', 'Application');
    
    $this->Acl->deny('Editor', 'Application');    
    $this->Acl->allow('Editor', 'Users', 'view');

}

}
