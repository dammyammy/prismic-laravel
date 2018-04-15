<?php

namespace TedbreeDigital\Prismic\Tests;

use Config;

class ConfigTest extends TestCase
{	
	public function testLoadsConfig() {
		$this->assertContains('prismic.io', Config::get('prismic.url'));
		$this->assertContains('prismic.io', config('prismic.url'));
	}
	
	public function testPopulateExpectedPrismicDefaults() {
		$this->assertArrayHasKey('url', $this->app['config']['prismic']);
		$this->assertArrayHasKey('token', $this->app['config']['prismic']);
	}
}
