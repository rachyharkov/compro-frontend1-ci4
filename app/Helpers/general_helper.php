<?php

use App\Models\Configuration;
use App\Models\User;

function get_user($id = null)
{
    $user = new User();
    return $id && $user ? $user->find($id) : null;
}

function getConfiguration()
{
    $configuration = new Configuration();
    return $configuration->where('domain_name', env('domain_name'))->first();
}