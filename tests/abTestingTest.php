<?php
/**
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

define('PATH', dirname(__FILE__));

//require_once realpath('../src/fizzBuzz.php');
require_once dirname(PATH . '../') . '/src/abTesting.php';
require_once 'PHPUnit/Autoload.php';

class abTestingTest extends PHPUnit_Framework_TestCase
{

    public function testAb()
    {
        $output = new abTesting();
        $result = $output->abDesigner();

        foreach ($result as $key => $value) {
            $this->assertInternalType('string', $value);
            echo 'User number: '. $key . PHP_EOL;
            echo 'Redirected to: '. $value . PHP_EOL;
            echo '---------------------------------'. PHP_EOL;
        }


    }
}
