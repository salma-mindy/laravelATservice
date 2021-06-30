<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index()
    {
        return View('pages.dashboard.index');
    }

    public function addOffre()
    {
        return View('pages.dashboard.offre.add-offre');
    }
}
