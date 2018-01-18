<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    
    public function index($language)
    {
        
        //
        return redirect('home')->with('status', trans('messages.langchanged'));
        
    }
    
}
