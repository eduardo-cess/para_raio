<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Date {

    public static function getDia($data) {
        return substr($data, 8, 2);
    }

    public static function getMes($data) {
        return substr($data, 5, 2);
    }

    public static function getAno($data) {
        return substr($data, 0, 4);
    }

    public static function getHora($data) {
        return substr($data, 11, 2);
    }

    public static function getData($data) { //ex: 2015-11-03 será convertido para 03/11/2015
        $newData = date("d/m/Y", strtotime($data));
        return $newData;
    }
    
        public static function getDataHora($data) { //ex: 2015-11-03 00:00:00 será convertido para 03/11/2015 00:00:00
        $newData = date("d/m/Y H:i:s", strtotime($data));
        return $newData;
    }

}


