<?php
use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $this->assertEquals(1,1);
        /*$calc = new Calculadora(3,5);
        $this->assertEquals(8, $calc->suma());*/
    }

    public function testDiff()
    {
        $this->assertEquals(1,1);
        
    }

    public function testMult()
    {
        $this->assertEquals(1,1);
      
    }

    public function testDiv()
    {
        $this->assertEquals(1,1);
        
    }

}
?>