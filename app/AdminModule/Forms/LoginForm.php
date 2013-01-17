<?php

namespace AdminModule\Forms;

use Nette\Application\UI\Form;
use Nette\Forms\Form;
use Nette\Security\AuthenticationException;

class LoginForm extends Form
{
	
	public function __construct() {
		
		$this->addProtection('Čas vypršel. Odešlete formulář znovu');

		$this->addText('username', 'Uživatelské jméno: ')
				->addRule(Form::FILLED, 'Vložte vaše uživatelské jméno')
				->addRule(Form::EMAIL, 'Zadaný email neni ve správném tvaru');
		
		$this->addPassword('password', 'Heslo: ')
				->addRule(Form::FILLED, 'Vložte heslo');
		$this->addSubmit('send', 'Přihlásit');
		$this->onSubmit[] = array($this, 'formSubmited');
		
	}
	
	public function formSubmited($form) {
		try{
			$user = $this->presenter->user;
			$user->login($form->username, $form->password);
			
			$this->presenter->application->restoreRequest($this->presenter->backlink);
			$this->presenter->redirect('Default:default');
		} catch (AuthenticationException $e) {
            $form->addError($e->getMessage());
        }
	}
	
}