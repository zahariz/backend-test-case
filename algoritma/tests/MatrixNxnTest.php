<?php 

namespace Madebyriki\TestCaseAlgoritma;
use PHPUnit\Framework\TestCase;

class MatrixNxnTest extends TestCase
{
    public function testSelisihMatrix()
    {
        $matrix = new MatrixNxn();

        $result = $matrix->getSelisihMatrix();

        $expect = 3;
        $this->assertEquals($expect, $result);
    }

    public function testDiagonalPertama()
    {
        $matrix = new MatrixNxn();

        $result = $matrix->getDiagonalPertama();

        $expect = 15;
        $this->assertEquals($expect, $result);
    }

    public function testDiagonalKedua()
    {
        $matrix = new MatrixNxn();

        $result = $matrix->getDiagonalKedua();

        $expect = 12;
        $this->assertEquals($expect, $result);
    }
}