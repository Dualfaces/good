<?php

namespace AdminModule;
use Nette\Application\UI;

class UserPresenter extends BasePresenter 
{
	/** @var id */
	private $id="";
	
	/** @var GD/UserRepository */
	private $userRepository;
	
	/** @var user */
	private $user;
	
	public function injectUserrepository(\GD\UserRepository $userRepository) 
	{
		$this->userRepository = $userRepository;
	}


	public function renderDefault() 
	{
		$users = $this->userRepository->findAll();
		$this->template->users = $users;
	}
	
	
	public function actionEdit($id) {
		$this->template->user = $this->user = $this->userRepository->findById($id)->fetch();	
	}
	
	
	protected function createComponentEditUserForm()
	{
		$user = $this->user;
		$form = new UI\Form();
		$form->addSelect('rights', 'Práva uživatele '.$user->username.': ')
			->setPrompt($user->rights)
			->addRule(UI\Form::FILLED, 'Je nutné vybrat, komu je úkol přiřazen.');
		$form->addSubmit('save', 'Uložit');
		return $form;
	}
	
}