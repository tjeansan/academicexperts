<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'role' => 'required',
            'startYear' => ['required','integer'],
            'endYear' => 'integer',
        ]);

        auth()->user()->researches()->create([
            'title' => $data['title'],
            'role' => $data['role'],
            'startYear' => $data['startYear'],
            'endYear' => $data['endYear'],
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

}
