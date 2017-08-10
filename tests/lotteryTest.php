<?php
/**
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

define('PATH', dirname(__FILE__));

//require_once realpath('../src/fizzBuzz.php');
require_once dirname(PATH . '../') . '/src/lottery.php';
require_once 'PHPUnit/Autoload.php';

class lotteryTest extends PHPUnit_Framework_TestCase
{

    public function testDateLotteryIrish()
    {
        $output = new lottery();
        $result = $output->dataLottery();

        echo 'The draw will take place next day: ' . PHP_EOL;
        foreach ($result as $value) {
            echo $value . PHP_EOL;
        }

    }
}
