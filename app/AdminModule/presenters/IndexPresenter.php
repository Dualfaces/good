<?php

namespace AdminModule;

use Nette\Application\UI;

final class IndexPresenter extends BasePresenter
{
	 
	/** @persistent */
	public $backlink = '';
	
	protected function createComponentLoginForm($name) 
	{
		$form = new UI\Form;
		$form->addText('username', 'Uživatelské jméno:')
			->setRequired('Zadejte vaše uživatelské jméno');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Zadejte vaše heslo.');

		$form->addCheckbox('remember', 'Pamatovat si mě?');

		$form->addSubmit('send', 'Přihlásit');

		// call method signInFormSucceeded() on success
		$form->onSuccess[] = $this->loginFormSubmited;
		return $form;
	}
	public function loginFormSubmited($form) {
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