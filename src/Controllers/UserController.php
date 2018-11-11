<?php
/**
 * Created by PhpStorm.
 * User: giden
 * Date: 11/11/2018
 * Time: 08:02
 */

namespace App\Controllers;


use App\Models\User;

class UserController
{
    public function index(){

        echo User::find(1)->username;
    }

}