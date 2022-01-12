<?php


declare(strict_types=1);

class PrimeFactorsTest extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once './src/primefactor.php';
    }

    public function testTrue(): void
    {
        $this->assertEquals(true, getPrimo(13));
    }

    public function testFalse(): void
    {
        $this->assertEquals(false, getPrimo(60));
    }

    public function testFactors(): void
    {
        $this->assertSame([1, 2, 2, 3, 5], factor(60));
    }

}