<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Job extends Model
{
    public static function store($request) 
    {
        $job = new Job;
        $job->id_campany = Auth::id();
        $job->name = $request->name ;
        $job->position = $request->position ;
        $job->description = $request->description ;
        $job->quantity = (int) $request->quantity ;
        $job->salary = (float) $request->salary ;
        $job->experience = $request->experience ;
        $job->degree = $request->degree ;
        $job->requirement = $request->requirement ;
        $job->benefit = $request->benefit ;
        $job->status = $request->status ;
        $job->save();
    }

    public static function update_($request, $job)
    {
        
    }
}
