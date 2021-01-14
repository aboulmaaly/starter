<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    */

    public function showUser()
    {
        return 'Aboulmaaly';
    }

    public function index()
    {
        // $data = [];
        // $data['age'] = 31;
        // $data['name'] = "Mohamed";

        // $obj = new \stdClass();

        // $obj->name = "Aboulmaaly";
        // $obj->age = 35;
        // $obj->gender = 'Male';

        $data = [];

        // return view(view: 'welcome', data: $data);

        return view('welcome',compact('data'));
    }
}
