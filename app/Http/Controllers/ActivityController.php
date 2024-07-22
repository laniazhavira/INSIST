<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ActivityController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengubah dari $user ke $users untuk menandakan kumpulan data
        return view('activity.activity', compact('users'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}