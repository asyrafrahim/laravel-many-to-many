<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trophy;
use Illuminate\Http\Request;

class TrophyController extends Controller
{
    // To get all trophy of a user
    public function getTrophies($user_id)
    {
        return User::find($user_id)->trophies;
    }

    // To get all users by trophy
    public function getUsers($trophy_id)
    {
        return Trophy::find($trophy_id)->users;
    }
}
