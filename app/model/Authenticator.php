<?php

use Nette\Security,
	Nette\Utils\Strings;


/*
CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password char(60) NOT NULL,
	role varchar(20) NOT NULL,
	PRIMARY KEY (id)
);
*/

/**
 * Users authenticator.
 */
class Authenticator extends Nette\Object implements Security\IAuthenticator
{
	/** @var Nette\Database\Connection */
	private $database;



	public function __construct(Nette\Database\Connection $database)
	{
		$this->database = $database;
	}



	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		$user = $this->database->table('user')->where('username', $username)->fetch();
		$role = $this->database->table('rights')->where('id', $user->rights)->fetch();
		if (!$user) {
			throw new Security\AuthenticationException('Uživatel nenalezen.', self::IDENTITY_NOT_FOUND);
		}

		if ($user->password !==  md5($password)) {
			throw new Security\AuthenticationException('Špatné heslo.'.md5($password), self::INVALID_CREDENTIAL);
		}

		unset($user->password);
		
		$identity = new Security\Identity($user->id, $role->name);
		$identity->name = $user->first_name . " " . $user->last_name;
		$identity->about = $user->about;
		$identity->email = $user->email;
		$identity->username = $user->username;
		
		return $identity;
	}




}
