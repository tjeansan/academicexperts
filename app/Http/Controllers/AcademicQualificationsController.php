<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicQualificationsController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'qualification' => 'required',
            'institution' => 'required',
            'year' => ['required','integer']
        ]);

        auth()->user()->academicQualifications()->create([
            'qualification' => $data['qualification'],
            'institution' => $data['institution'],
            'year' => $data['year'],
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

}
