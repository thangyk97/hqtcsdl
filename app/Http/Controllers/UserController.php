<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function addUser() {
        $results = DB::select('select * from Users where id_user = ?', array(1));
    }
}
