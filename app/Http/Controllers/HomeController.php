<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Interface_color;

class HomeController extends Controller
{
    //
    public function index(){
        $interfaceColor = Interface_color::orderBy('id', 'DESC')->get()->first();
        $categories = Category::orderBy('priority')->get();
        return view('home',["categories"=>$categories,"interfaceColor"=>$interfaceColor]);
    }
}
