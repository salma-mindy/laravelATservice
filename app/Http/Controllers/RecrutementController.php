<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutementController extends Controller
{
    
    public function offres()
    {
    	return View('pages.recrutement.index');
    }

    public function showOffre()
    {
        return View('pages.recrutement.show-offre');
    }


    public function formRecruteur()
    {
    	return View('pages.recruteur.saving');
    }
}
