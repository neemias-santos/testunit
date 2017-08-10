<?php
/**
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

define('PATH', dirname(__FILE__));
require_once 'PHPUnit/Autoload.php';
require_once dirname(PATH . '../') . '/src/RandomArray.php';

class randomArrayTest extends PHPUnit_Framework_TestCase
{
    public function testRandomArray()
    {
        $randomArray = new randomArray();
        $output = $randomArray->RandomArrayInteractions();

        //mount a result for exhibition
        $result = "The value min the array is:".$output['min']. PHP_EOL;
        $result .= "The value max the array is:".$output['max']. PHP_EOL;
        $result .= "The missing value between them is: ".$output['missingValue'];
        echo $result;

        $this->assertGreaterThanOrEqual($output['min'], $output['missingValue']);
        $this->assertLessThanOrEqual($output['max'], $output['missingValue']);

      }
}
