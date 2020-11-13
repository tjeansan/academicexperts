@extends('layouts.app')

@section('content')
    <div class="container">

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('p/create') ? 'active' : null }}" href="{{ url('p/create') }}" role="tab">Add Publications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('r/create') ? 'active' : null }}" href="{{ url('r/create') }}" role="tab">Add Research</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('aq/create') ? 'active' : null }}" href="{{ url('aq/create') }}" role="tab">Add Academic Qualifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('pq/create') ? 'active' : null }}" href="{{ url('pq/create') }}" role="tab">Add Professional Qualifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('a/create') ? 'active' : null }}" href="{{ url('a/create') }}" role="tab">Add Awards</a>
            </li>
        </ul>

        <br>

        <div class="tab-content">
            <div class="tab-pane {{ request()->is('p/create') ? 'active' : null }}" id="{{ url('p/create') }}" role="tabpanel">
                <div class="col-md-9">
                    <form action="/p" enctype="multipart/form-data" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12 offset-2">
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label">Title</label>

                                    <input id="title"
                                           type="text"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           name="title"
                                           value="{{ old('title') }}"
                                           autocomplete="title" autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="authors" class="col-md-4 col-form-label">Authors</label>

                                    <input id="authors"
                                           type="text"
                                           class="form-control{{ $errors->has('authors') ? ' is-invalid' : '' }}"
                                           name="authors"
                                           value="{{ old('authors') }}"
                                           autocomplete="authors" autofocus>

                                    @if ($errors->has('authors'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('authors') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="source" class="col-md-4 col-form-label">Source</label>

                                    <input id="source"
                                           type="text"
                                           class="form-control{{ $errors->has('source') ? ' is-invalid' : '' }}"
                                           name="source"
                                           value="{{ old('source') }}"
                                           autocomplete="source" autofocus>

                                    @if ($errors->has('source'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('source') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="doi" class="col-md-4 col-form-label">DOI</label>

                                    <input id="doi"
                                           type="text"
                                           class="form-control{{ $errors->has('doi') ? ' is-invalid' : '' }}"
                                           name="doi"
                                           value="{{ old('doi') }}"
                                           autocomplete="doi" autofocus>

                                    @if ($errors->has('doi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('doi') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label">Year</label>

                                    <input id="year"
                                           type="integer"
                                           class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                           name="year"
                                           value="{{ old('year') }}"
                                           autocomplete="year" autofocus>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-primary">Add New Publication</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane {{ request()->is('r/create') ? 'active' : null }}" id="{{ url('r/create') }}" role="tabpanel">
                <div class="col-md-9">
                    <form action="/r" enctype="multipart/form-data" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12 offset-2">
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label">Title</label>

                                    <input id="title"
                                           type="text"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           name="title"
                                           value="{{ old('title') }}"
                                           autocomplete="title" autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label">Role</label>

                                    <input id="role"
                                           type="text"
                                           class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}"
                                           name="role"
                                           value="{{ old('role') }}"
                                           autocomplete="role" autofocus>

                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="startYear" class="col-md-4 col-form-label">Start Year</label>

                                    <input id="startYear"
                                           type="integer"
                                           class="form-control{{ $errors->has('startYear') ? ' is-invalid' : '' }}"
                                           name="startYear"
                                           value="{{ old('startYear') }}"
                                           autocomplete="startYear" autofocus>

                                    @if ($errors->has('startYear'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('startYear') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="endYear" class="col-md-4 col-form-label">End Year</label>

                                    <input id="endYear"
                                           type="integer"
                                           class="form-control{{ $errors->has('endYear') ? ' is-invalid' : '' }}"
                                           name="endYear"
                                           value="{{ old('endYear') }}"
                                           autocomplete="endYear" autofocus>

                                    @if ($errors->has('endYear'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('endYear') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-primary">Add New Research</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane {{ request()->is('aq/create') ? 'active' : null }}" id="{{ url('aq/create') }}" role="tabpanel">
                <div class="col-md-9">
                    <form action="/aq" enctype="multipart/form-data" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12 offset-2">
                                <div class="form-group row">
                                    <label for="qualification" class="col-md-4 col-form-label">Academic Qualification</label>

                                    <input id="qualification"
                                           type="text"
                                           class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}"
                                           name="qualification"
                                           value="{{ old('qualification') }}"
                                           autocomplete="qualification" autofocus>

                                    @if ($errors->has('qualification'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('qualification') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="institution" class="col-md-4 col-form-label">Institution</label>

                                    <input id="institution"
                                           type="text"
                                           class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}"
                                           name="institution"
                                           value="{{ old('institution') }}"
                                           autocomplete="institution" autofocus>

                                    @if ($errors->has('institution'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('institution') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label">Year</label>

                                    <input id="year"
                                           type="integer"
                                           class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                           name="year"
                                           value="{{ old('year') }}"
                                           autocomplete="year" autofocus>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('year') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-primary">Add New Academic Qualification</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane {{ request()->is('pq/create') ? 'active' : null }}" id="{{ url('pq/create') }}" role="tabpanel">
                <div class="col-md-9">
                    <form action="/pq" enctype="multipart/form-data" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12 offset-2">
                                <div class="form-group row">
                                    <label for="qualification" class="col-md-4 col-form-label">Professional Qualification</label>

                                    <input id="qualification"
                                           type="text"
                                           class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}"
                                           name="qualification"
                                           value="{{ old('qualification') }}"
                                           autocomplete="qualification" autofocus>

                                    @if ($errors->has('qualification'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('qualification') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="organisation" class="col-md-4 col-form-label">Organisation</label>

                                    <input id="organisation"
                                           type="text"
                                           class="form-control{{ $errors->has('organisation') ? ' is-invalid' : '' }}"
                                           name="organisation"
                                           value="{{ old('organisation') }}"
                                           autocomplete="organisation" autofocus>

                                    @if ($errors->has('organisation'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organisation') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label">Year</label>

                                    <input id="year"
                                           type="integer"
                                           class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                           name="year"
                                           value="{{ old('year') }}"
                                           autocomplete="year" autofocus>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('year') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-primary">Add New Professional Qualification</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane {{ request()->is('a/create') ? 'active' : null }}" id="{{ url('a/create') }}" role="tabpanel">
                <div class="col-md-9">
                    <form action="/a" enctype="multipart/form-data" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-12 offset-2">
                                <div class="form-group row">
                                    <label for="awardName" class="col-md-4 col-form-label">Award Name</label>

                                    <input id="awardName"
                                           type="text"
                                           class="form-control{{ $errors->has('awardName') ? ' is-invalid' : '' }}"
                                           name="awardName"
                                           value="{{ old('awardName') }}"
                                           autocomplete="awardName" autofocus>

                                    @if ($errors->has('awardName'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('awardName') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="institution" class="col-md-4 col-form-label">Institution</label>

                                    <input id="institution"
                                           type="text"
                                           class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}"
                                           name="institution"
                                           value="{{ old('institution') }}"
                                           autocomplete="institution" autofocus>

                                    @if ($errors->has('institution'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('institution') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label">Year</label>

                                    <input id="year"
                                           type="integer"
                                           class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                           name="year"
                                           value="{{ old('year') }}"
                                           autocomplete="year" autofocus>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('year') }}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-primary">Add New Award</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
