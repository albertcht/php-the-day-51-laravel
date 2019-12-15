<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function analysis()
    {
        return [
            'required_files' => count(get_included_files())
        ];
    }

    public function hello(Request $request)
    {
        return [
            'user' => $requst->user ?: 'Laravel',
            'method' => $request->method()
        ];
    }

    public function sleep()
    {
        sleep(1);

        return [
            'foo' => 'bar'
        ];
    }

    public function user()
    {
        return User::first();
    }
}
