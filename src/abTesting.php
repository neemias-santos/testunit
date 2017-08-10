<?php

/**
 * Exads would like to A/B test a number of promotional designs to see which provides the best conversion rate.
 * Write a snippet of PHP code that redirects end users to the different designs based on the database table below.
 * Extend the database model as needed.
 *
 * i.e. - 50% of people will be shown Design A, 25% shown Design B and 25% shown Design C.
 * The code needs to be scalable as a single promotion may have upwards of 3 designs to test.
 *
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */

include_once "../config/config.php";

class abTesting
{

    public function abDesigner()
    {
        $db = config::getInstance();
        $sql = $db->query("SELECT * FROM testUnit.design");
        $result = $sql->fetchAll();

        //Balancer for change of designer
        $newOffset = 0;

        $arrayAccumulator = array();

        //receive array of the database for interactions
        foreach ($result as $value) {
            //Totalizer of interactions
            $count = 0;
            //Does the interactions until it has no results to fill
            while ($count < $value['split_percent']) {
                $t = $newOffset;
                $arrayAccumulator[$t] = $value['design_name'];
                $newOffset++;
                $count++;
            }
        }
        return $arrayAccumulator;
    }

}