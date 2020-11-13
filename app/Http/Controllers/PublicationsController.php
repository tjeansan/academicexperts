<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function index(Request $request){

        $publications = Publication::where([
            ['title', '!=', Null],
            [function($query) use ($request){
                if (($term = $request->term)) {
                    $query->orWhere('title', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("year", "desc")
            ->paginate(25);

        return view('publications', compact('publications'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'authors' => 'required',
            'source' => 'required',
            'doi' => '',
            'year' => ['required','integer']
        ]);

        auth()->user()->publications()->create([
            'title' => $data['title'],
            'authors' => $data['authors'],
            'source' => $data['source'],
            'doi' => $data['doi'],
            'year' => $data['year'],
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

}
