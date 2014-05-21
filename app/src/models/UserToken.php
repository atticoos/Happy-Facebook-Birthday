<?php

namespace FacebookBirthday\Model;


class UserToken extends AbstractModel
{
    public function token(){
        return $this->belongsTo(
            $this->prependnamespace('User')
        );
    }
}