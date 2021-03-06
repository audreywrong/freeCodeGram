<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);

        return view('home', [
            'user' => $user,
        ]);
    }
}
