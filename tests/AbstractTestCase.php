<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */
namespace Vendor\Tests;

use Orchestra\Testbench\TestCase;

abstract class AbstractTestCase extends TestCase
{
    /*
     * This class is used for boot the application with default configuration and logic
     * See the example below:
     * */

    public function migrate(){
        $this->artisan('migrate',[
            '--realpath' => realpath(__DIR__ . "/../src/Vendor-name/Package/resources/migrations")
        ]);
    }
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}