<?php 

namespace Madebyriki\TestCaseAlgoritma;
use PHPUnit\Framework\TestCase;

class LongestSentencesTest extends TestCase
{
    public function testGetLongestSentences()
    {
        $longestSentences = new LongestSentences();
        $input = "Kucing saya namanya melek";
        $result = $longestSentences->longestWord($input);

        $expectation = "namanya";
        $this->assertEquals($expectation. " : " . strlen($expectation), $result);
    }
}