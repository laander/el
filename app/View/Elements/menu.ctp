<?php

$menu = array();

// all users
//if($currentuser['role_id'] <= 4 && $currentuser['role_id'] != 0) {
//	$menu[0] = "<li>".$this->Output->icon('170', 'small')."</li>";						
	$menu[1] = "<li>".$this->Html->link("Projekter", array('controller'=>'projects', 'action' => 'index'))."</li>";
//}

//group manager
//if($currentuser['role_id'] <= 3 && $currentuser['role_id'] != 0) {
	$menu[4] = "<li>".$this->Html->link("Brugere", array('controller'=>'users', 'action' => 'index'))."</li>";
//}

// section managers and admins 					
//if($currentuser['role_id'] <= 2 && $currentuser['role_id'] != 0) {
	$menu[2] = "<li>".$this->Html->link("Enheder", array('controller' => 'items', 'action' => 'index'))."</li>";
//	$menu[3] = "<li>".$this->Output->icon('041', 'small')."</li>";
	$menu[5] = "<li>".$this->Html->link("Grupper", array('controller'=>'groups', 'action' => 'index'))."</li>";
//}

// admins
//if($currentuser['role_id'] <= 1 && $currentuser['role_id'] != 0) {
	$menu[6] = "<li>".$this->Html->link("Sektioner", array('controller'=>'sections', 'action' => 'index'))."</li>";
	$menu[7] = "<li>".$this->Html->link("Roller", array('controller'=>'roles', 'action' => 'index'))."</li>";	
//}

ksort($menu);
foreach($menu as $point){
    echo $point;
}

?>		
