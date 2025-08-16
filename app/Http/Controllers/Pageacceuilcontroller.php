<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class Pageacceuilcontroller extends Controller
{
    public function jjj(){
         return Inertia::render('indix') ;
    }
}
