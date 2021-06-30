<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    
    public function liste()
    {
        return View('pages.dashboard.employe.liste');
    }
}
