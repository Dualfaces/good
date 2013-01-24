<?php

namespace AdminModule;
use Nette\Application\UI;

class UserPresenter extends BasePresenter 
{
	/** @var id */
	private $id="";
	
	/** @var GD\UserRepository */
	private $userRepository;
	
	/** @var GD\UserRepository */
	private $rightsRepository;
	
	/** @var user */
	private $user;
	
	public function injectUserRepository(\GD\UserRepository $userRepository) 
	{
		$this->userRepository = $userRepository;
	}
	
	public function injectRightsRepository(\GD\RightsRepository $rightsRepository) 
	{
		$this->rightsRepository = $rightsRepository;
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
		$rights = $this->rightsRepository->findAll();
		foreach ($rights as $right) {
			$sel_rights[$right->id] = $right->name; 
		}
		$user = $this->user;
		$form = new UI\Form();
		$form->addSelect('rights', 'Práva uživatele '.$user->username.': ', $sel_rights)
			->setPrompt('--Vyberte--')
			->addRule(UI\Form::FILLED, 'Je nutné vybrat, komu je úkol přiřazen.');
		$form->addHidden('user_rights', $user->rights->id);
		$form->addSubmit('save', 'Uložit');
		
		$form->onSuccess[] = $this->editUserFormSucceeded;
		return $form;
	}
	




	public function editUserFormSucceeded($form)
	{
		$values = $form->getValues();
		$user = $this->user;

		if($values->rights == $values->user_rights){
			$this->flashMessage('Práva uživatele se nezměnila.','success');
			$this->redirect('User:default');
		}
		else
		{
			$id = $user->id;
			$rights = $values->rights;
			$this->userRepository->updateUser($id,NULL,NULL,NULL,NULL,NULL,NULL,$rights);
			$user = $this->userRepository->findById($id)->fetch();
			if($values->rights = $user->right){
				$this->flashMessage('Práva byla změněna.', 'success');
				$this->redirect('User:default');
			}
			else
			{
				$this->flashMessage('Něco je špatně.', 'warning');
			}
		}

		
	}
	
}