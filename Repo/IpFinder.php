<?php
namespace App\Repo;
/**
 * Created by PhpStorm.
 * User: Sahand
 * Date: 7/22/19
 * Time: 3:09 PM
 */
class IpFinder
{
    public function getIp(){

        if( isset($_SERVER['HTTP_CF_CONNECTING_IP']) ){
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } else if( isset($_SERVER['HTTP_X_REAL_IP']) ){
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }
}