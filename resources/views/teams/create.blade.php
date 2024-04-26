@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Team
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{route('teams.store')}}" method="post">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="team_name" class="form_label">Team Name:</label>
                <input type="text" class="form-control" id="team_name" name="team_name" aria-describedby="tnHelp">
            </div>
            <div class="mb-3">
                <label for="logoURL" class="form_label">Logo URL</label>
                <input type="text" class="form-control" id="logoURL" name="logoURL" aria-describedby="logoHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
