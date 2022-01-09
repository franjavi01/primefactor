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
        $this->assertSame([true],getPrimo(13));
    }

    public function testFalse(): void
    {
        $this->assertSame([false],getPrimo(60));
    }

    public function testFactors(): void
    {
        $this->assertSame([2, 2, 3, 5], factors(60));
    }

}