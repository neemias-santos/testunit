<?php

/**
 * The Irish National Lottery draw takes place twice weekly on a Wednesday and a Saturday at 8pm.
 * Write a function or class that calculates and returns the next valid draw date based on the current
 * date and time AND also on an optionally supplied date and time.
 *
 * Created by PhpStorm.
 * User: Neemias
 * Date: 06/07/2017
 */
require_once '../constants/Constants.php';

class lottery
{
    public function dataLottery(){
        $currentDate =  date('Y-m-d H:i:s');

        $allDateArray = array();
        for ($t = 0; $t <= 6; $t++) {
            //Adds an extra day to the current date
            $dataStrtotime = strtotime(date($currentDate) . ' + '.$t.' day');
            //discover what day of the week
            $dateOfTheWeek = date('w', $dataStrtotime);
            //mounts the complete date
            $dateOfTheYear = date('l d/m/Y 08:00 A', $dataStrtotime);
            //Take only the date of the day
            $day = date('d', $dataStrtotime);
            if ($dateOfTheWeek == Constants::WEDNESDAY || $dateOfTheWeek == Constants::SATURDAY){
                $allDateArray[$day] = $dateOfTheYear." ";
            }
        }
        //order array
        sort($allDateArray);
        //remove the last date
        array_pop($allDateArray);

        return $allDateArray;
    }
}