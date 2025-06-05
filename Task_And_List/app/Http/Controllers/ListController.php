<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;
use Inertia\Inertia;
class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = TaskList::where("user_id", auth()->id())->with("task")->get();
        return Inertia::render("Lists/index", [
            "lists"=>$lists,
            "flash"=>[
                "success"=>session('success'),
                "error"=>session("error")
            ]
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "description" => "nullable|string",


        ]);
        TaskList::create([
            ...$validated,
            user_id => auth() -> id()
        ]);

        return redirect()->route("list.index")->with("success", "List created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskList $list)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "description" => "nullable|string",


        ]);
        $list::updated($validated);

        return redirect()->route("list.index")->with("success", "List created successfully");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskList $list)
    {
        $list -> delete();
        return redirect()->route('lists.index')->with("List deleted successfully")
    }
}
