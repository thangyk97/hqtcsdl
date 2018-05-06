<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Candidate extends Model
{
    public static function store($request)
    {
        $user = new User;
        $user->name = $request->name ;
        $user->address = $request->address ;
        $user->email = $request->email ;
        $user->password =  Hash::make($request->password) ;
        $user->type = "candidate";
        $user->role = "candidate";
        $user->status = "active";
        $user->save();

        $candidate = new Candidate;
        $candidate->id_candidate = User::where('email',$user->email)->first()->id;
        $candidate->save();
    }
}
