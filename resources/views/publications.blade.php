@extends('layouts.app')

@section('content')

    <h2>Browse Publications</h2>

    <br>

    <div class="row justify-content-center">

        <div class="input-group d-flex flex-row-reverse col-sm-3 col-md-10 mb-4">
            <form class = "form-inline my-2 my-lg-0">
                <input type="text" size="80" class="form-control mr-2" name="term" placeholder="Search Publications..." id="term">
                <a href="{{ route('publications.index') }}" class=" mt-1"></a>
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <div class="col-md-8">
            <table class="table">
                <thead class="table table-bordered table-responsive-lg">
                <tr>
                </tr>
                </thead>
                <tbody>
                @foreach($publications as $publication)
                    <tr>
                        <td align="left" style="padding-top:5px">
                            <div>{{ $publication->authors }}. ({{ $publication->year }}) <strong>{{ $publication->title }}.</strong>
                                <i>{{ $publication->source }}</i> </div>
                            <div>{{ $publication->doi }}</div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {!! $publications->links() !!}
    </div>



@endsection
