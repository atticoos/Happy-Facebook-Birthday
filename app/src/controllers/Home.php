<?php

namespace FacebookBirthday\Controllers;

use FacebookBirthday\Model\User;
use FacebookBirthday\Controllers\BaseController;
use Illuminate\Support\Facades\View;


class Home extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('angular');
    }

    public function test(){
        return View::make('test');
    }

}
