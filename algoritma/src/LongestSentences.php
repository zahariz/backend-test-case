<?php 

namespace Madebyriki\TestCaseAlgoritma;

class LongestSentences {
    public function longestWord($input)
    {
        $data = $input;
        $arr = explode(" ", $data);
        $count = count($arr);
        for($i = 0; $i < $count; $i++)
        {
            $max = $arr[$i];
            $index = $i;

            for($j=$i+1; $j < $count; $j++) 
            {
                if(strlen($arr[$j]) > strlen($max))
                {
                    $max = $arr[$j];
                    $index = $j;
                }
            }

            $temp = $arr[$index];
            $arr[$index] = $arr[$i];
            $arr[$i] = $temp;
        }

        return $arr[0] . " : " . strlen($arr[0]);
    }
}