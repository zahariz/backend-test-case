<?php 

namespace Madebyriki\TestCaseAlgoritma;

class CountArray {
    public function getCountArray()
    {
        $input = ['xc', 'dz', 'bbb', 'dz'];
        $query = ['bbb', 'ac', 'dz'];

        $output = [];

        foreach($query as $q)
        {
            $count = 0;
            foreach($input as $i)
            {
                if($q == $i)
                {
                    $count++;
                }
            }
            $output[] = $count;
        }

        return $output;
    }
}