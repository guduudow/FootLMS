<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use App\Models\Team;

class RosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamsPlayedFor = [
            ['player_id' => 1, 'team_id' => 4], //associating messi and barca
            ['player_id' => 1, 'team_id' => 22], //associating messi and psg
            ['player_id' => 2, 'team_id' => 27], //assoc cr7 w/ scp
            ['player_id' => 2, 'team_id' => 19], //assoc cr7 w/ man u
            ['player_id' => 2, 'team_id' => 23], //assoc cr7 w/ real madrid
            ['player_id' => 2, 'team_id' => 16], //assoc cr7 w/ juve
            ['player_id' => 2, 'team_id' => 3], //assoc cr7 w/ al-nassr
            ['player_id' => 3, 'team_id' => 25], //assoc neymar w/ santos
            ['player_id' => 3, 'team_id' => 4], //assoc neymar w/ barca
            ['player_id' => 3, 'team_id' => 22], //assoc neymar w/ psg
            ['player_id' => 4, 'team_id' => 21], //assoc lewa w/ poz
            ['player_id' => 4, 'team_id' => 7], //assoc lewa w/ borussia
            ['player_id' => 4, 'team_id' => 5], //assoc lewa w/ bayern
            ['player_id' => 4, 'team_id' => 4], //assoc lewa w/ barca
            ['player_id' => 5, 'team_id' => 14], //assoc virgil w/ gronin
            ['player_id' => 5, 'team_id' => 10], //assoc virgil w/ celt
            ['player_id' => 5, 'team_id' => 26], //assoc virgil w/ southamp
            ['player_id' => 5, 'team_id' => 17], //assoc virgil w/ liverpool
            ['player_id' => 6, 'team_id' => 13], //assoc bruyne w/ genk
            ['player_id' => 6, 'team_id' => 11], //assoc bruyne w/ chelsea
            ['player_id' => 6, 'team_id' => 28], //assoc bruyne w/ vfl
            ['player_id' => 6, 'team_id' => 18], //assoc bruyne w/ man city
            ['player_id' => 7, 'team_id' => 20], //assoc mbappe w/ monaco
            ['player_id' => 7, 'team_id' => 22], //assoc mbappe w/ psg
            ['player_id' => 8, 'team_id' => 2], //assoc salah w/ al mok
            ['player_id' => 8, 'team_id' => 12], //assoc salah w/ basel
            ['player_id' => 8, 'team_id' => 11], //assoc salah w/ chelsea
            ['player_id' => 8, 'team_id' => 24], //assoc salah w/ roma
            ['player_id' => 8, 'team_id' => 17], //assoc salah w/ liverpool
            ['player_id' => 9, 'team_id' => 9], //assoc zidane w/ cannes
            ['player_id' => 9, 'team_id' => 6], //assoc zidane w/ bordeaux
            ['player_id' => 9, 'team_id' => 16], //assoc zidane w/ juve
            ['player_id' => 9, 'team_id' => 23], //assoc zidane w/ real madrid
            ['player_id' => 10, 'team_id' => 8], //assoc pirlo w/ brescia
            ['player_id' => 10, 'team_id' => 15], //assoc pirlo w/ inter
            ['player_id' => 10, 'team_id' => 1], //assoc pirlo w/ ac
            ['player_id' => 10, 'team_id' => 16], //assoc pirlo w/ juve
            // ['player_id' => 11, 'team_id' => 14], //assoc suarez w/ gronin
            // // ['player_id' => 11, 'team_id' => 17], //assoc suarez w/ liverpool
            // // ['player_id' => 11, 'team_id' => 4], //assoc suarez w/ barca
            // ['player_id' => 11, 'team_id' => 29], //assoc suarez w/ atletico madrid
        ];

        foreach ($teamsPlayedFor as $played) {
            $playerId = $played['player_id'];
            $teamId = $played['team_id'];

            if (Player::find($playerId) && Team::find($teamId)) {
                Player::find($playerId)->teams()->attach($teamId);
            }
        }
    }
}