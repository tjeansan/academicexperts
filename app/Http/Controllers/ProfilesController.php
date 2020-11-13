<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{

    public function index(User $user){
        return view('profiles.index',compact('user'));
    }

    public function home(User $user){
        $profiles = Profile::inRandomOrder()->limit(3)->get();
        return view('landing',['profiles=>$profiles'],compact('profiles','user'));
    }

    public function getAll(Request $request, User $user){
        $profiles = Profile::where([
            ['name', '!=', Null],
            [function($query) use ($request){
                if (($term = $request->term)) {
                    $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

        return view('academics', compact('profiles','user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit(User $user){
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user){

        $data = request()->validate([
            'name'=>'required',
            'department'=>'required',
            'faculty'=>'required',
            'url'=>['nullable','url'],
            'areas'=>'',
            'image'=>['nullable','image'],
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect('/profile/' . auth()->user()->id);
    }
}
