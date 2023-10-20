<?php
require './transacciones.php';

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase 
{   
	/**
     * validar deposito de valores negativos
     */
    public function testNegativeamount()
    {
    	$test = new Bankingsystem();
        $this->assertEquals(110, $test->deposits(100,-10));
    }
    /**
     * validar sobregiro en retiro
     */
    public function testWithdrawalOverdraft()
    {
    	$test2 = new Bankingsystem();
    	$this->assertEquals(90, $test2->addwithdrawal(10,100));
    }
    /**
     * validar transferencia sin fondos suficientes
     */
    public function testTrasferNotBalance()
    {
    	$cliA = new Bankingsystem();
    	$cliB = new Bankingsystem();
    	$cliA->addwithdrawal(10,100);
        $cliB->deposits(10,100);
    	$this->assertEquals(90, $cliA->addwithdrawal(10,100));
    }
    /**
     * validar existencia de cliente para transferencua
     */
    public function testTrasferNotAccountFound()
    {
    	$client = new Bankingsystem();
        $client->owner='juan';
    	$this->assertTrue($client->validacliente());
    }
}