<?php

namespace AdminModule;

use AdminModule\Forms\LoginForm;

final class AdminPresenter extends BasePresenter
{
	 
	/** @persistent */
	public $backlink = '';
	
	protected function createComponentLoginForm($name) 
	{
		$form = new LoginForm($this,$name);
	}
}