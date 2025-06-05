<?php

namespace App\Http\Controllers;

use App\Models\Book;

abstract class Controller
{
    public function index(){
        $book = Book::all();
        return view("Book",compact("books"));
    }
}
