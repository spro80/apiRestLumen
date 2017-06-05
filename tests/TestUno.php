<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

require('TestCase.php');
//require './vendor/autoload.php';
//class TestUno extends PHPUnit_Framework_TestCase {
class TestUno extends TestCase{
//class TestUno extends PHPUnit_Framework_TestCase {
	
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->response->getContent(), $this->app->version()
        );
    }*/
    
//    require './vendor/autoload.php';

//class MyClassTest extends PHPUnit_Framework_TestCase {
    
    public function testApplication()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(301, $response->status());
    }

    /*public function test2Application()
    {
        $response = $this->call('GET', '/getCountCategoria');

        $this->assertEquals(42, $response->status());
    }*/

}
