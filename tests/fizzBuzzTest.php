<?php
/**
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

define('PATH', dirname(__FILE__));

//require_once realpath('../src/fizzBuzz.php');
require_once dirname(PATH . '../') . '/src/fizzBuzz.php';
require_once dirname(PATH . '../') . '/constants/Constants.php';
require_once 'PHPUnit/Autoload.php';

class fizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testOutputFizzBuzzOk()
    {
        $fizzBuzz = new fizzBuzz();
        $output = $fizzBuzz->outputFizzBuzz();

        $this->assertEquals(Constants::OUTPUT_SHA2, hash('sha256',$output));

        echo $output;
    }
}