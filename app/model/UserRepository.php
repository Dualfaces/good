<?php

namespace GD;
use Nette;

class UserRepository extends Repositary
{
	public function newUser($username, $password, $email, $last_name = '', $first_name = '', $about = '', $rights = 3) 
	{	
		$this->getTable()->insert(array(
			'username' => $username,
			'password' => md5($password),
			'last_name' => $last_name,
			'first_name' => $first_name,
			'email' => $email,
			'about' => $about,
			'rights' => $rights
		));
	}
	
	public function deleteUser($id) {
		$this->findById($id)->delete();
	}
	
	public function updateUser($id, $username = NULL, $password = NULL, $email = NULL, $last_name = NULL, $first_name = NULL, $about = NULL, $rights_id = NULL) {
		$user = $this->findById($id)->fetch();
		if($first_name == NULL){
			$first_name = $user->first_name;
		}
		if($about == NULL){
			$about = $user->about;
		}
		if($password == NULL){
			$password = $user->password;
		}
		if($username == NULL){
			$username = $user->username;
		}
		if($last_name == NULL){
			$last_name = $user->last_name;
		}
		if($password == NULL){
			$password = $user->password;
		}
		if($rights_id == NULL){
			$rights_id = $user->rights->id;
		}
		if($email == NULL){
			$email = $user->email;
		}
		
		$user->update(array(
			'username' => $username,
			'password' => md5($password),
			'last_name' => $last_name,
			'first_name' => $first_name,
			'email' => $email,
			'about' => $about,
			'rights_id' => $rights_id
		));
	}
}