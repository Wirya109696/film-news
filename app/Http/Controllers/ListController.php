<?php

namespace App\Http\Controllers;

use App\Models\Listmovie;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
        return view('list', [
            "title" => "List",
            "list" => Listmovie::all()
        ]);
    }

    public function show($slug){
        return view('lists', [
            "title" => "Single Post",
            "list" => Listmovie::find($slug)
        ]);
    }
}
