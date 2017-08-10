<?php

/**
 * Write a PHP script that prints all integer values from 1 to 100.
 * For multiples of three output "Fizz" instead of the value and for the multiples of five output "Buzz".
 * Values which are multiples of both three and five should output as "FizzBuzz".
 *
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */
class fizzBuzz
{
    public function outputFizzBuzz()
    {
        $result = '';
        for ($t = 1; $t <= 100; $t++) {
            $content = $this->Caculate($t);
            $result .=  ($content ? $content : $t) . PHP_EOL;
        }
        return $result;
    }

    /**
     * Function for calculate and do interactions
     *
     * @param $value
     * @return string
     */
    private function Caculate(int $value){
        $result = '';
        $result .= $value % 3 == 0 ? "Fizz" : "";
        $result .= $value % 5 == 0 ? "Buzz" : "";
        return $result;
    }
}