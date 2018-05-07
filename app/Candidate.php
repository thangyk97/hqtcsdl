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

        $id =$user->id;

        $candidate = new Candidate;
        $candidate->id_candidate = $id;
        $candidate->save();

        $education = new Education;
        $education->id_candidate = $id;
        $education->degree = " ";
        $education->school = " ";
        $education->time = "2018-05-07 09:18:17.395";
        $education->department = " ";
        $education->grade = 0.0;
        $education->save();

        $experience = new Experience;
        $experience->id_candidate = $id;
        $experience->campany = " ";
        $experience->position = " ";
        $experience->time = " ";
        $experience->description = " ";
        $experience->save();

        $skill = new Skill;
        $skill->id_candidate = $id;
        $skill->name = " ";
        $skill->description = " ";
        $skill->save();

        $withWork = new WithWork;
        $withWork->id_candidate = $id;
        $withWork->work_address = " ";
        $withWork->career = " ";
        $withWork->type = " ";
        $withWork->salary = " ";
        $withWork->objective = " ";
        $withWork->save();

    }
}
