@extends('layouts.app')

@section('content')
    <style>
        .title{
            position:absolute;
            top:35%;
            left:40%;
            transform:translate(-50%,-50%);
        }

        .title h1{
            font-size:50px;
            margin:0;
            padding:0;
            height:100px;
            width:100px;
        }

        .search{
            position:absolute;
            top:45%;
            left:50%;
            transform:translate(-50%,-50%);
        }


    </style>

    <div class="title">
        <h1 align="center">AcademicExperts</h1>
    </div>

    <body>
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

        <div class="container">
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
                        <tfoot>
                        <td></td>
                            <td><a href="/academics/">Show more</a></td>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </body>



@endsection

