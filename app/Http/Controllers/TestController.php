<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function show () {
        $users = DB::select('SELECT * FROM users');
        $users = User::select('name', 'age', 'password')
            ->first();
        dd($users->name);
    }
}
