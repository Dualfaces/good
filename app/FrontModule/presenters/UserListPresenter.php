<?php

namespace FrontModule;

class UserListPresenter extends BasePresenter
{
	/** @var GD/UserRepository */
	private $userRepository;
	
	public function injectUserrepository(\GD\UserRepository $userRepository) {
		$this->userRepository = $userRepository;	
	}
	
	public function renderDefault() {
		$users = $this->userRepository->findAll();
		$this->template->users = $users;
		$this->template->title = "User list";
	}
}
