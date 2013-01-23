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
		$this->addResource('Front:Homepage:default');
		$this->addResource('Front:Secure:default');
		
		//privileges
		$this->deny(self::ALL, self::ALL, self::ALL);
		$this->allow('Uživatel', 'Front:Homepage:default', Permission::ALL);
		$this->allow('Administrator', Permission::ALL, Permission::ALL);
	}
	
}