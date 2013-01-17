<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	private $userRepository;
	
	public function handleLogout(){
		$this->getUser()->logout(true);
		$this->redirect('this');
	}
	public function injectUserrepository(GD\UserRepository $userRepository) {
		$this->userRepository = $userRepository;
	}
	public function handleCreateUser() {
		$this->userRepository->newUser('username', 'password', 'last_name', 'first_name');
		$this->flashMessage('Uživatel byl přidán', 'success');
	}
}
