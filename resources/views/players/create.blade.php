@extends('layouts.admin');
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Player
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{route('players.store')}}" method="post">
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
                <label for="player_name" class="form-label">Player Name:</label>
                <input type="text" class="form-control" id="player_name" name="player_name" aria-describedby="pNameHelp" />
              </div>
              <div class="mb-3">
                <label for="position" class="form-label">Position:</label>
                <input type="text" class="form-control" id="position" name="position" aria-describedby="posHelp"/>
              </div>
              <div class="mb-3">
                <label for="matches_played" class="form-label">Matches Played:</label>
                <input type="text" class="form-control" id="matches_played" name="matches_played" aria-describedby="matchesHelp"/>
              </div>
              <div class="mb-3">
                <label for="goals" class="form-label">Goals:</label>
                <input type="text" class="form-control" id="goals" name="goals" aria-describedby="goalHelp" />
              </div>
              <div class="mb-3">
                <label for="assists" class="form-label">Assists:</label>
                <input type="text" class="form-control" id="assists" name="assists" aria-describedby="assistsHelp"/>
              </div>
              <div class="mb-3">
                <label for="debut" class="form-label">Debut:</label>
                <input type="text" class="form-control" id="debut" name="debut" aria-describedby="debutHelp"/>
              </div>
              <div class="mb-3">
                <label for="final_match" class="form-label">Final Match:</label>
                <input type="text" class="form-control" id="final_match" name="final_match" aria-describedby="fmHelp"/>
              </div>
              <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="countryHelp" />
              </div>
              <div class="mb-3">
                <label for="imageURL" class="form-label">ImageURL:</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURLHelp" />
              </div>
              <div class="mb-3">
                <label for="teams" class="dropdown">Select Team:</label>
                  @foreach ($teams as $team)
                      <input type="checkbox" name="teams[]" value="{{$team -> id}}">{{$team -> team_name}}</br>
                  @endforeach
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
