<?php

namespace App\Http\Controllers;
use App\Models\tag;
class TagController extends Controller
{
    //
    function viewtag(){
        $tags = tag::all();
       return view('tags' , ["tags" => $tags]);
    }
    function create(){
        Tag::factory(10)->create();
        return redirect('tags');
    }
}
