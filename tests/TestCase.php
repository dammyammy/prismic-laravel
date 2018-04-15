<?php

namespace TedbreeDigital\Prismic\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
	protected function setUp() {
		parent::setUp();
	}
	
	protected function getPackageProviders($app) {
		return [ \TedbreeDigital\Prismic\ServiceProvider::class ];
	}
	
	protected function getPackageAliases($app) {
		return [ "Prismic" => \TedbreeDigital\Prismic\Facade::class ];
	}
}
