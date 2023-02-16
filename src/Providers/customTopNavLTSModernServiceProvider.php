<?php
 
namespace customTopNavLTSModern\Providers;

use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use IO\Helper\TemplateContainer;
use IO\Helper\ComponentContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\ConfigRepository;

class customTopNavLTSModernServiceProvider extends TemplateServiceProvider
{
	const PRIORITY = 0;
 	/**
	 * Register the service provider.
	 */
	public function register()
	{
 
	}

	public function boot(Twig $twig, Dispatcher $eventDispatcher, ConfigRepository $config)
    {
		$this->overrideTemplate("Ceres::Widgets.Header.TopBarWidget", "customTopNavLTSModern::Widgets.Header.CustomTopBarWidget");	
    }
}