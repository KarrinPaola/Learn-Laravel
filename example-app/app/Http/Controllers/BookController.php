<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    // public function index(){
    //     $books = DB::table("books")->get();
    //     return view("Book",compact("books"));
    // }

    //Adding, Post
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "bookName" => "required|string|max:255",
            "bookCode" => "required|string|max:255",
            "bookAuthor" => "required|string|max:255",
        ]);

        $book = new Book();
        $book->bookName = $validateData["bookName"];
        $book->bookCode = $validateData["bookCode"];
        $book->bookAuthor = $validateData["bookAuthor"];

        $book->save();
        return response()->json(["message" => "Book created successfully", "book" => "$book", 201]);
    }

    //Fetching all data from serve, GET
    public function index()
    {
        $books = DB::table("books")->get();
        return response()->json(["result"=>$books]);
    }

    //Fetching one record from serve, GET
    public function show($id)
    {
        return response()->json();
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        return response()->json();
    }
}
