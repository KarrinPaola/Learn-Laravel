<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function addData(){
        $item = new Teachers();
        $item->name = "Le Hieu";
        $item->email="emailTest@gmail.com";
        $item->phone_number = "03848661282";
        $item->date_of_birth = date("2000-06-04");
        $item->save();

        return "Add successfully";
    }

    public function getData(){
        $items = Teachers::all();
        return $items;
    }

    public function getDataTrashed(){
        // dùng withTrashed để lấy toàn bộ cả thường và đã bị xoá
        $items = Teachers::onlyTrashed()->get();
        return $items;
    }

    public function restoreData(){
        $items = Teachers::withTrashed()->find(1)->restore();
        return $items;
    }

    public function updateData(){
        $item = Teachers::find(15);
        $item->name = "Updated Name";
        $item->email = "updated_email@gmail.com";
        $item->update();
        return "updated successfully";
    }

    public function deleteData(){
        // When use soft delete, if you need to be use forceDelete() to delete completely
        // $item = Teachers::findOrFail(2);
        // $item->delete();

        Teachers::find(3)->forceDelete();

        return "Delete successfully";
    }

    public function whereCondition(){
        // $items = Teachers::where("date_of_birth", ">", "1985-01-01")
        // ->where("id",">",10)
        // ->orWhere("date_of_birth","<","1990-01-01")
        // ->get();

        // $items = Teachers::where("id", '>=', 10)
        // ->where(function($query){
        //     $query->where("date_of_birth", ">=","1990-01-01")
        //     ->orWhere("date_of_birth", "<=", "1980-01-01");
        // })->get();
        // return $items;

        // $items = Teachers::whereBetween("date_of_birth", ["1990-01-01", "1997-01-01"])->get();

        // $items = Teachers::whereNotBetween("date_of_birth", ["1980-01-01", "2000-01-01"])->get();

        // $items = Teachers::whereIn("id", [1,2,3,4,5])->get();
        // $items = Teachers::whereNotIn("id", [1,2,3,4,5])->get();

        $items = Teachers::whereAny(["date_of_birth", "id"], "<", ["1980-01-01", 10])->get();
        return $items;
    }

    public function queryScope() {
        $item = Teachers::old()->get() ;
        return($item);
    }
}
