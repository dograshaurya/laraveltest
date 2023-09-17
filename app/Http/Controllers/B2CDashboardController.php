<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class B2CDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','user-access']);
    // }

    public function index()
    {
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $users = User::role($role)->get();
        return view('B2B.index',compact('users','role'));
    }
}
