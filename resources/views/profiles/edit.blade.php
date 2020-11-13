@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Name</label>

                        <input id="name"
                               type="text"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name"
                               value="{{ old('name') ?? $user->profile->name }}"
                               autocomplete="name" autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="department" class="col-md-4 col-form-label">Department</label>

                        <input id="department"
                               type="text"
                               class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}"
                               name="department"
                               value="{{ old('department') ?? $user->profile->department }}"
                               autocomplete="department" autofocus>

                        @if ($errors->has('department'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('department') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="faculty" class="col-md-4 col-form-label">Faculty</label>

                        <input id="faculty"
                               type="text"
                               class="form-control{{ $errors->has('faculty') ? ' is-invalid' : '' }}"
                               name="faculty"
                               value="{{ old('faculty') ?? $user->profile->faculty }}"
                               autocomplete="faculty" autofocus>

                        @if ($errors->has('faculty'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('faculty') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">URL</label>

                        <input id="url"
                               type="text"
                               class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                               name="url"
                               value="{{ old('url') ?? $user->profile->url }}"
                               autocomplete="url" autofocus>

                        @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="areas" class="col-md-4 col-form-label">Areas of Expertise</label>

                        <input id="areas"
                               type="text"
                               class="form-control{{ $errors->has('areas') ? ' is-invalid' : '' }}"
                               name="areas"
                               value="{{ old('areas') ?? $user->profile->areas }}"
                               autocomplete="areas" autofocus>

                        @if ($errors->has('areas'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('areas') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
