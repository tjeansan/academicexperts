@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
            </div>

            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h3">{{ $user->profile->name }}</div>
                    </div>

                    <div>
                        @can('update', $user->profile)
                            <a href="/p/create">Add New Data</a>
                        @endcan
                    </div>
                </div>

                <div>
                    @can('update', $user->profile)
                        <a href="/profile/edit/{{ $user->id }}">Edit Profile</a>
                    @endcan
                </div>

                <div class="pt-4 font-weight-bold">{{ $user->name }}</div>
                <div>{{ $user->profile->department }}</div>
                <div>{{ $user->profile->faculty }}</div>
                <div>Areas of Expertise: {{ $user->profile->areas }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>

            </div>

        </div>

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Publications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Research</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Qualifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Awards</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="table table-bordered table-responsive-lg">
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->publications as $publication)
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

            <div class="tab-pane" id="tabs-2" role="tabpanel">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="table table-bordered table-responsive-lg">
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->researches as $research)
                            <tr>
                                <td align="left" style="padding-top:5px">
                                    <div>
                                        {{ $research->title }}, <i>{{ $research->role }}</i>, <strong>{{ $research->startYear }} to {{ $research->endYear }}</strong>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane" id="tabs-3" role="tabpanel">
                <div class="col-md-12">
                    <br>
                    <h4>Academic Qualifications</h4>
                    <table class="table">
                        <thead class="table table-bordered table-responsive-lg">
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->academicQualifications as $academicQualification)
                            <tr>
                                <td align="left" style="padding-top:5px">
                                    <div>
                                        {{ $academicQualification->qualification }}, {{ $academicQualification->institution }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <h4>Professional Qualifications</h4>
                    <table class="table">
                        <thead class="table table-bordered table-responsive-lg">
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->profQualifications as $profQualification)
                            <tr>
                                <td align="left" style="padding-top:5px">
                                    <div>
                                        {{ $profQualification->qualification }}, {{ $profQualification->organisation }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane" id="tabs-4" role="tabpanel">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="table table-bordered table-responsive-lg">
                        <tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->awards as $award)
                            <tr>
                                <td align="left" style="padding-top:5px">
                                    <div>
                                        {{ $award->awardName }}, <i>{{ $award->institution }}</i>, <strong>{{ $award->year }}</strong>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


    </div>
@endsection

