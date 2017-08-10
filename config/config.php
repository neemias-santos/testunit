<?php

/**
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */
class config
{
    public static $instance;

    //construction private
    public static function getInstance()
    {

        try {
            self::$instance = new PDO('mysql:host=localhost;dbname=testUnit', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

            return self::$instance;

        } catch (Exception $e) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
        }
    }
}