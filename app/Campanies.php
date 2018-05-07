<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Campanies extends Model
{
    //
    protected $table = "Campanies";

    public function user() 
    {
        return $this->hasOne('App\User', 'id_user');
    }

    public static function store($request)
    {
        $user = new User;
        $user->name = $request->name ;
        $user->address = $request->address ;
        $user->email = $request->email ;
        $user->password = Hash::make($request->password) ;
        $user->type = "campany";
        $user->status = "active";
        $user->role = "campany";
        $user->save();
        
        $campany = new Campanies;
        $campany->id_campany = User::where('email',$user->email)->first()->id;
        $campany->description = $request->description;
        $campany->website = $request->website;
        $campany->phone = $request->phone;
        $campany->fax = $request->fax;
        $campany->save();
    }

    public static function update_($request, $id)
    {
        
    }
}
