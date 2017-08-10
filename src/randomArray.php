<?php

/**
 * Write a PHP script to generate a random array of 500 integers (values of 1 – 500 inclusive).
 * Randomly remove and discard an arbitary element from this newly generated array.
 *
 * Write the code to efficiently determine the value of the missing element.
 * Explain your reasoning with comments.
 *
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */
class randomArray
{
    public function RandomArrayInteractions()
    {
        $min = 1;
        $max = 5;
        //Creat an array containing a range of elements, it is better used functions natives
        $numberRandomComplete = range($min, $max);

        //now will go mix the numbers
        shuffle($numberRandomComplete);

        //here copy ths variable complete
        $numberSuffle = $numberRandomComplete;

        //removing a element aleatory
        unset($numberSuffle[rand($min, $max)]);

        //searching fault value
        $fault = array_diff($numberRandomComplete, $numberSuffle);

        //mount a result
        $result = array(
            'min' => $min,
            'max' => $max,
            'missingValue' => current($fault)
        );

        return $result;
    }
}