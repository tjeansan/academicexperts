<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfQualificationsController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'qualification' => 'required',
            'organisation' => 'required',
            'year' => ['required','integer']
        ]);

        auth()->user()->profQualifications()->create([
            'qualification' => $data['qualification'],
            'organisation' => $data['organisation'],
            'year' => $data['year'],
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
}
