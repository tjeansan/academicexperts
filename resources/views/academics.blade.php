@extends('layouts.app')

@section('content')

    <h2>List of Academic Experts</h2>

    <div class="container">

        <div class="search" align="center">
            <form action="{{ route('profiles.search') }}" method="GET" role="search">

                <div class="input-group">
                    <input type="text" class="form-control mr-2" name="term" placeholder="Search academic experts" id="term">
                    <a href="{{ route('profiles.search') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                                </span>
                    </a>
                </div>
            </form>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <tbody>
                    @foreach($profiles as $profile)
                        <tr>
                            <td width="100">
                                <img src="{{ $profile->profileImage() }}" class="rounded-circle w-100">
                            </td>
                            <td align="left" style="padding-top:5px">
                                <div><strong><a href="/profile/{{$profile->user_id}}">{{ $profile->name }}</a></strong></div>
                                <div>{{ $profile->department }}</div>
                                <div>{{ $profile->faculty }}</div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!! $profiles->links() !!}
    </div>


@endsection
