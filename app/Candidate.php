<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public static function store($request)
    {
        $user = new User;
        $user->name = $request->name ;
        $user->address = $request->address ;
        $user->email = $request->email ;
        $user->password = $request->password ;
        $user->type = "candidate";
        $user->status = "active";
        $user->save();

        $candidate = new Candidate;
        $candidate->id_candidate = User::where('email',$user->email)->first()->id_user;
        $candidate->save();
    }
}
