@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="display-2">
                View All Teams
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($teams as $team)
            <div class="col-md-4">
                <div class="card p-3">
                    <img src="{{asset('images/' . $team->logoURL)}}" alt="team logo" style="width:200px;">
                    <div class="card-body">
                        <h2 class="card-title">
                            {{$team->team_name}}
                        </h2>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
                    <a href="{{ route('teams.trash', $team->id) }}">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
