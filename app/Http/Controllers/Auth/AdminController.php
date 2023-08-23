<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Login Form Return View
    public function index(Request $request)
    {
        return view('livewire.frontend.auth.login-form')->layout('layouts.admin-auth');
    }
}
