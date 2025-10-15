<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('app.pages.index');
    }

    public function settings()
    {
        return view('app.pages.settings');
    }

    public function profile()
    {
        return view('app.pages.profile');
    }

    public function notifications()
    {
        return view('app.pages.notifications');
    }
}
