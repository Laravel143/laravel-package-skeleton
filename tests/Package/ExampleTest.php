<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Vendor\Tests\Package;

use Vendor\Package\Models\Test;
use Vendor\Tests\AbstractTestCase;

class ExampleTest extends AbstractTestCase
{
    /*
     * This is a example class test
     * */

    public function setUp()
    {
        parent::setUp();

        //Run the package migrations
        $this->migrate();
    }


    //Basic test
    public function test_check_if_a_data_can_be_persisted(){
        $model= Test::create(['name'=>'Teste','description'=>'Descrição']);
        $this->assertEquals('Teste',$model->name);
    }
}