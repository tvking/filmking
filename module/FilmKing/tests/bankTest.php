<?php 
namespace Application\tests;

class BankAccountTest extends \PHPUnit_Framework_TestCase
{
    protected $ba;

    protected function setUp()
    {
        $this->b = 9;
    }

    public function testB()
    {
        $this->assertEquals(9, $this->b);
    }
}