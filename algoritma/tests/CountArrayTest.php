<?php 

namespace Madebyriki\TestCaseAlgoritma;
use PHPUnit\Framework\TestCase;

class CountArrayTest extends TestCase
{
    public function testGetCountArray()
    {
        $countArray = new CountArray();
        $result = $countArray->getCountArray();
        
        $expect = [1,0,2];

        $this->assertEquals($expect, $result);
    }
}