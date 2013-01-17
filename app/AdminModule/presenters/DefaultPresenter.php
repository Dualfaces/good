<?php

namespace AdminModule;

use Nette\Http\UserStorage;
use Nette\Security\User;

final class DefaultPresenter extends BasePresenter
{
	public function startup() 
	{
		parent::startup();
		
		if(!$this->user->isLoggedIn())
		{
			if($this->user->getLogoutReason() === User::INACTIVITY)
			{
				$this->flashMessage('Byl jsi odhlášen.', 'warning');
			}
			
			$backlink = $this->getApplication()->storeRequest();
			$this->redirect('Admin:login', array('backlink' => $backlink));			
		}
		else
		{
			if(!$this->user->isAllowed($this->name, $this->action))
			{
				$this->flashMessage('Vstup zakázán. Nemáte práva prohlížet obsah této stránky.', 'warning');
				$this->redirect('Admin:login');
			}
		}
		
	}
	public function actionLogout()
    {
        $this->user->logOut();
        $this->redirect('Admin:login');
    }
		
}