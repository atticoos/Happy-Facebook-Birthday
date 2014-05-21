<?php

namespace FacebookBirthday\Controllers\Api;

use FacebookBirthday\Controllers\BaseController;
use FacebookBirthday\Model\User;
use FacebookBirthday\Model\UserToken;
use Illuminate\Support\Facades\Response;


class Auth extends BaseController
{
    public function getByFacebookId(){
        $token = UserToken::where('token_id', '=', '10201997578601424')->first();

        if (empty($token)){
            return Response::json(null, 404);
        }

        $user = User::with('token')->findOrFail($token->user_id);

        return Response::json($user, 200);

        $user = User::with(array('token' => function($query){
                $query->where('token_id', '=', '10201997578601424a');
            }))->get();
        return Response::json($user, 200);
    }
}