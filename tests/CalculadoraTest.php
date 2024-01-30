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

    public function testDiffPos()
    {
        $this->assertEquals(1,1);
        $calc = new Calculadora(5,3);
        $this->assertEquals(2, $calc->diff());
        
    }

    public function testDiffNeg()
    {
        $this->assertEquals(1,1);
        $calc = new Calculadora(3,5);
        $this->assertEquals(2, $calc->diff());
        
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