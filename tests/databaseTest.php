<?php
/**
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

define('PATH', dirname(__FILE__));

//require_once realpath('../src/fizzBuzz.php');
require_once dirname(PATH . '../') . '/src/database.php';
require_once 'PHPUnit/Autoload.php';

class databaseTest extends PHPUnit_Framework_TestCase
{

    public function testInserrDatabase()
    {
        $outputDatabase = new database();

        $employee = array(
            'name' => 'Neemias Ferreira',
            'age' => '30',
            'job_title' => 'JavaScript Develop'
        );

        $lastId = $outputDatabase->create($employee);

        $result =  $outputDatabase->readById($lastId);

        $this->assertEquals($employee['name'], $result['name']);
        $this->assertEquals($employee['age'], $result['age']);
        $this->assertEquals($employee['job_title'], $result['job_title']);
    }

    public function testConnectionDataBase()
    {
        $outputDatabase = new database();
        $result = $outputDatabase->read();

        $this->assertInternalType('array', $result);

        foreach ($result as $value) {
            echo PHP_EOL. 'Register: ' . $value['id'] . PHP_EOL;
            echo 'Name: ' . $value['name'] . PHP_EOL;
            echo 'Age: ' . $value['age'] . PHP_EOL;
            echo 'Job Title: ' . $value['job_title'] . PHP_EOL;
            echo '---------------------------' . PHP_EOL;
        }

    }
}
