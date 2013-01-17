<?php

namespace Alc\Security;

use Nette\Security\Permission;

class Alc extends Permission
{
	
	public function __construct() {
		//roles
		$this->addRole('Host');
		$this->addRole('Uživatel', 'Host');
		$this->addRole('Správce projektu', 'Uživatel');
		$this->addRole('Redaktor', 'Uživatel');
		$this->addRole('Administrator');
		
		//resources
		$this->addResource('Sign:In');
		$this->addResource('Homepage:Default');
		
		//privileges

		$this->allow('Uživatel', 'Homepage:Default', Permission::ALL);
		$this->allow('Administrator', Permission::ALL, Permission::ALL);
	}
	
}