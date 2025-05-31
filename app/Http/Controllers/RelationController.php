<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    function user($id)
    {
        // $user = User::where('id', $id)->get();
        // $user = User::where('id', $id)->firstOrFail();
        $user = User::find($id);
        dd($user->profile);
        // dd($user->profile);
    }

    function profile(Profile $profile)
    {
        // $profile = Profile::findOrFail($id);
        dd($profile->user);
    }

    function users()
    {
        // egar load
        $users = User::with('profile')->get();
        return view('relations.users', compact('users'));
    }
}
