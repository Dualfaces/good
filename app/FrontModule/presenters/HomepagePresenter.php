<?php
namespace FrontModule;
/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	
	/** @var Anketa\AnketaRepository */
	private $anketaRepository;
	
	/** @var Anketa\OtazkaRepository */
	private $otazkaRepository;

/*
	public function injectAnketaRepository(Anketa\AnketaRepository $anketaRepository) 
	{
		return $this->anketaRepository = $anketaRepository;
	}
	
	public function injectOtazkaRepository(Anketa\otazkaRepository $otazkaRepository) 
	{
		return $this->otazkaRepository = $otazkaRepository;
	}
	*/
	
	public function renderDefault()
	{
		
		
		
	}

}
