<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    //
    // public function index()
    // {
    //     return view('auth.register.createaccount');
    // }
    public function createAccount()
    {
        return view('auth.register.createaccount');
    }
    public function accountDetail()
    {
        return view('auth.register.accountdetail');
    }
    public function investorData()
    {
        return view('auth.register.investordata');
    }
    public function personalData()
    {
        return view('auth.register.personaldata');
    }
    public function accreditation()
    {
        return view('auth.register.accreditation');
    }
    public function review()
    {
        return view('auth.register.review');
    }
    public function submit()
    {
        return view('auth.register.submit');
    }
}
