<?php 

namespace Madebyriki\TestCaseAlgoritma;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    public function testReverseString()
    {
        
        $rev = new ReverseString();
        $input = "NEGIE1";
        $result = $rev->reverse($input);
        $this->assertEquals('EIGEN1', $result);
    }
}