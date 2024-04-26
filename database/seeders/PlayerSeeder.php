<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::factory()->create([
            'player_name' => 'Lionel Messi',
            'position' => 'Forward',
            'matches_played' => 889,
            'goals' => 721,
            'assists' => 334,
            'debut' => '2004-04-16',
            'final_match' => null,
            'country' => 'Argentina',
            'imageURL' => 'messi.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Cristiano Ronaldo',
            'position' => 'Striker',
            'matches_played' => 995,
            'goals' => 741,
            'assists' => 236,
            'debut' => '2002-08-15',
            'final_match' => null,
            'country' => 'Portugal',
            'imageURL' => 'ronaldo.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Neymar Jr.',
            'position' => 'Left Winger',
            'matches_played' => 506,
            'goals' => 297,
            'assists' => 193,
            'debut' => '2009-03-07',
            'final_match' => null,
            'country' => 'Brazil',
            'imageURL' => 'neymar.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Robert Lewandowski',
            'position' => 'Striker',
            'matches_played' => 755,
            'goals' => 559,
            'assists' => 150,
            'debut' => '2005-08-08',
            'final_match' => null,
            'country' => 'Poland',
            'imageURL' => 'lewandowski.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Virgil van Djik',
            'position' => 'Centre Back',
            'matches_played' => 515,
            'goals' => 51,
            'assists' => 26,
            'debut' => '2011-05-12',
            'final_match' => null,
            'country' => 'Netherlands',
            'imageURL' => 'virgil.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Kevin De Bruyne',
            'position' => 'Central Midfielder',
            'matches_played' => 595,
            'goals' => 145,
            'assists' => 245,
            'debut' => '2009-08-09',
            'final_match' => null,
            'country' => 'Belgium',
            'imageURL' => 'debruyne.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Kylian Mbappé',
            'position' => 'Striker',
            'matches_played' => 358,
            'goals' => 276,
            'assists' => 123,
            'debut' => '2015-12-02',
            'final_match' => null,
            'country' => 'France',
            'imageURL' => 'mbappe.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Mohamed Salah',
            'position' => 'Forward',
            'matches_played' => 584,
            'goals' => 282,
            'assists' => 142,
            'debut' => '2010-05-03',
            'final_match' => null,
            'country' => 'Egypt',
            'imageURL' => 'mosalah.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Zinedine Zidane',
            'position' => 'Midfielder',
            'matches_played' => 689,
            'goals' => 125,
            'assists' => 141,
            'debut' => '1989-05-18',
            'final_match' => '2006-07-10',
            'country' => 'France',
            'imageURL' => 'zidane.jpeg'
        ]);

        Player::factory()->create([
            'player_name' => 'Andrea Pirlo',
            'position' => 'Central Midfielder',
            'matches_played' => 756,
            'goals' => 73,
            'assists' => 133,
            'debut' => '1995-05-21',
            'final_match' => '2017-11-05',
            'country' => 'Italy',
            'imageURL' => 'pirlo.jpeg'
        ]);
    }
}
