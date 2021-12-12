<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Laratrust\LaratrustFacade as Laratrust;

use function PHPUnit\Framework\returnSelf;

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
        // return Auth::user();
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        return view('home');
    }

    protected function adminDashboard()
    {
        return view('dashboard.admin');
    }

    protected function memberDashboard()
    {
        // return view('dashboard.member');
        $borrowLogs = Auth::user()->borrowLogs()->borrowed()->get();
        return view('dashboard.member', compact('borrowLogs'));
    }

    // public function userindex()
    // {
    //     return view('home');

    // }

    // public function adminindex()
    // {
    //     return view('home');

    // }
}
