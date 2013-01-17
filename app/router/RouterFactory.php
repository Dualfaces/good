<?php

use Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList();
		$router[] = new Route('index.php', 'Front:Default:default', Route::ONE_WAY);
		
		$router[] = $adminRouter = new RouteList('Admin');
		$adminRouter[] = new Route('admin/<presenter>/<action>[/<backlink>]', 'Default:default');
		
		$router[] = $frontRouter = new RouteList('Front');
		$frontRouter[]= new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
		/*$router = new RouteList();
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Front:Homepage:default');
		$router[] = new Route('admin/<presenter>/<action>[/<id>]', 'Admin:Homepage:default');
		$router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
		*/
	}

}
