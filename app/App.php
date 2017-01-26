<?php

namespace App;

use DI\ContainerBuilder;
use DI\Bridge\Slim\App as Bridge;

Class App extends Bridge
{
	protected function configureContainer(ContainerBuilder $builder)
    {
    	$builder->addDefinitions([
    		'settings.displayErrorDetails' => true

    	]);

    	$builder->addDefinitions( __DIR__ . '/container.php' );	
    }
}