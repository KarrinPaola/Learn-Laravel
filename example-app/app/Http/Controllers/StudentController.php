<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $hello;    
    protected $age;
    public function __construct(){
        $this->hello="my name" ;
        $this->age = 10; 
    }
    public function index()
    {
        return "hello from controller";
    }

    /* public function aboutUs($id, $name)
    {
        return "ID No " . $id . " Name " . $name;
    } */

    public function aboutUs($id, $name)
    {
        // $hello = $this->privateFunction(); 
        return "".$this->hello." ".$this->age;

        // return view("aboutus", compact("id", "name"));
    }

    private function privateFunction(){
        return "hello world";
    }
}