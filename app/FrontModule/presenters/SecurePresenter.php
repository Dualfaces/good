<?php

namespace FrontModule;

class SecurePresenter extends BasePresenter
{
	public function renderDefault() 
	{
		$this->template->title = "Máš právo vstoupit na tuto stránku.";
	}
}