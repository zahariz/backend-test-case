<?php 

namespace Madebyriki\TestCaseAlgoritma;

class ReverseString {
    
    public function reverse($input)
    {
        $string = $input;
        $length = strlen($string);
        $new_string = "";
        $numbers = "";

        for ($i = 0; $i < $length; $i++) {
            $char = $string[$i];
            if (is_numeric($char)) {
                $numbers .= $char;
            } else {
                $new_string .= $char;
            }
        }
        $new_string = strrev($new_string) . $numbers;

        return $new_string; 
    }

}