<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signUpForm');
    }

    public function displayInfor(signUpRequest $Request)
    {
        $user = [
            'name' => $name = $Request->input('name'),
            'age' => $age = $Request->input('age'),
            'date' => $date = $Request->input('date'),
            'phone' => $phone = $Request->input('phone'),
            'web' => $web = $Request->input('web'),
            'address' => $address = $Request->input('address')
        ];
        return view('signUpForm')->with('user', $user);
    }
}
