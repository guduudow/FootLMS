@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
      <h1 class="display-2">
        View All Players
      </h1>
    </div>
</div>
<div class="row">
    @foreach ($players as $player)
        @php
            $finalgame = $player->final_match ? "<p class='card-body'>Final: $player->final_match</p>" : "";
        @endphp
        <div class="col-md-4">
            <div class="card p-3">
                <img src="{{ asset('images/' . $player->imageURL) }}" alt="player image" style="height: auto"/>
                <div class="card-body">
                    <h2 class="card-title">{{ $player->player_name }}</h2>
                    <p class="card-body">Position: {{ $player->position }}</p>
                    <p class="card-body">Matches Played: {{ $player->matches_played }}</p>
                    <p class="card-body"> Goals: {{ $player->goals }}</p>
                    <p class="card-body">Assists: {{ $player->assists }}</p>
                    <p class="card-body">Debut: {{ $player->debut }}</p>
                    {!! $finalgame !!}
                    <p class="card-body">Country: {{ $player->country }}</p>
                </div>
                <div class="mt-3">
                    <h6>Teams:</h6>
                    @foreach (explode(",", $player->logos) as $logo)
                        <img src="{{ asset('images/' . $logo) }}" alt="Team Logo" class="team-logo mx-3 py-3" style="max-width: 20%; height: auto;">
                    @endforeach
                </div>
                <div class="card-body">
                    <a href="{{ route('players.edit', $player->id) }}">Edit</a>
                    <a href="{{ route('players.trash', $player->id) }}">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

