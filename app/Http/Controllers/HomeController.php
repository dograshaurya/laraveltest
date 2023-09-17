<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->stripe_id == '' && $user->stripe_id == null){
                return view('purchase');
            }else{
                return redirect('dashboard');
            }
        }
        
    }

    public function dashboard()
    {
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $users = User::role($role)->get();
        return view('customer.index',compact('users','role'));
    }

}
