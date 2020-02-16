<?php


namespace App\GraphQl\Queries;


use App\User;

class UserQuery
{
    public function all()
    {
        return User::all();
    }

    public function find($root, $args)
    {
        return User::find($args['id']);
    }
}
