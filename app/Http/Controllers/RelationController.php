<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    function user($id)
    {
        $user = User::find($id);

        dd($user->profile);
    }
}
