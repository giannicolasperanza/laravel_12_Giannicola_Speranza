<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
   

    public function create()
    {
        $tags = Tag::all();
        return view('tags.create', compact('tags'));
        
    }

    public function store(TagRequest $request)
    {

        Tag::create($request->all());
        return $this->create();
    }   

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return $this->create();
    }


}