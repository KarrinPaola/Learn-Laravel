<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentAddRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    // public function index(){
    //     $students = Student::all();
    //     return view("Student", compact("students"));
    // }

    public function index2(Request $request)
    {
        $students = Student::query()
            ->when($request->search, function ($query) use ($request) {
                $search = $request->search;
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                        ->orWhere('age', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%")
                        ->orWhere('date_of_birth', 'like', "%$search%")
                        ->orWhere('score', 'like', "%$search%")
                        ->orWhere('gender', 'like', "%$search%");
                });
            })
            ->paginate(10);

        return view("students.index", compact("students"));
    }

    public function create(StudentAddRequest $request)
    {
        $imagePath=null;
        if($request->hasFile("image")){
            $imagePath=$request->file("image")->store("photo", "public");
        }
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->score = $request->score;
        $student->image=$imagePath;
        $student->save();

        return redirect("student");
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->score = $request->score;
        $student->update();

        return redirect("student");
    }

    public function destroy(Request $request, $id){
        $student=Student::findOrFail($id);
        if($student->image){
            Storage::disk("public")->delete($student->image);
        }
        $student->delete();
        return redirect("student");
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact("student"));
    }
    // public function addData()
    // {
    //     DB::table('students')->insert([
    //         [
    //             'name' => 'tester2',
    //             'email' => 'tester2@gmail.com',
    //             "age" => 15,
    //             "date_of_birth" => "2024-07-06",
    //             "gender" => "male",
    //         ],
    //         [
    //             'name' => 'tester3',
    //             'email' => 'tester3@gmail.com',
    //             "age" => 15,
    //             "date_of_birth" => "2024-08-06",
    //             "gender" => "male",
    //         ]
    //     ]);
    //     return "Add successfully";
    // }
    // public function getData(){
    //     $item = DB::table("students")
    //     ->select("id", "name", "score")
    //     // ->limit(10)
    //     ->orderBy("score","desc")
    //     ->get();
    //     return $item;
    // }
    // public function updateData($id){
    //     DB::table("students")->where("id","=", $id)->update([
    //         "name" => "updated name"
    //     ]);
    //     return "updated successfully";
    // }
    // public function deleteData($id){
    //     DB::table("students")->where("id","=", $id)->delete();
    //     return "Deleted successfully";
    // }
}