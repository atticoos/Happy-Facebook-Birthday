<?php

namespace FacebookBirthday\Controllers\Api;

use FacebookBirthday\Controllers\BaseController;
use FacebookBirthday\Model\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth as LaravelAuth;
use Illuminate\Support\Facades\Validator;

class Me extends BaseController
{
    public function getProfile(){
        $user = User::with('token')->findOrFail(1);
        return Response::json($user, 200);
    }
}