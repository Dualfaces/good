<?php

namespace Alc\Security;

use Nette\Security\Permission;

class Alc extends Permission
{
	
	public function __construct() {
		//roles
		$this->addRole('Uživatel');
		$this->addRole('Správce projektu', 'Uživatel');
		$this->addRole('Redaktor', 'Uživatel');
		$this->addRole('Administrator');
		
		//resources
		$this->addResource('Sign:In');
		$this->addResource('Admin:Default');
		$this->addResource('Front:Homepage:Default');
		
		//privileges

		$this->allow('Uživatel', 'Front:Homepage:Default', Permission::ALL);
		$this->allow('Administrator', Permission::ALL, Permission::ALL);
	}
	
}