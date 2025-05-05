<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    protected $name; 
    protected $age; 

    protected $job; 

    public function __construct(){
        
    }
    public function index(){
        return view("welcome", compact());
    }
}