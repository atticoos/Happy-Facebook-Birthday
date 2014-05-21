<?php

use FacebookBirthday\Model\User;
use FacebookBirthday\Model\UserToken;

class UserTableSeeder extends Seeder
{
    public function run(){
        Eloquent::unguard();

        DB::table('users')->delete();
        DB::table('user_tokens')->delete();
        $atticus = User::create(array(
            'email' => 'contact@atticuswhite.com',
            'password'  => Hash::make('123456'),
            'firstname' => 'Atticus',
            'lastname'  => 'White'
        ));

        $atticusToken = UserToken::create(array(
            'user_id'   => $atticus->id,
            'token'     => 'CAAUAFe63f2QBAHGvXmG7LF7EKhzzf6tTrzDTbKNCXvU1OuLAiSBRrZBjIq11GFuTVDAbAF4vR9tneTGhTRxBsoH400QxwewRsCLY2fhzE1isImesYF2RduMZAWAzfSfa6Bf0IuZCyhV5KXjVOjgmq7MpAkIt9Cw4X9CaYQ8zpKa4PAjfP1LXtqhoqW9OdQZD',
            'token_id'  => "10201997578601424"
        ));




    }

}