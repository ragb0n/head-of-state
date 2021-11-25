<?php

namespace App\Http\Controllers;

use App\Models\Page as ModelsPage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $pages = ModelsPage::all();

        dd($pages);
    }

    public function show($id){
        $page = ModelsPage::findOrFail($id);

        return view('pages.show', compact('page'));
    }
}
