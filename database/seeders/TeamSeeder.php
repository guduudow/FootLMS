<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::factory()->create([
            'team_name' => 'AC Milan',
            'logoURL' => 'acmilan.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Al Mokawloon',
            'logoURL' => 'almokawloon.png'
        ]);

        Team::factory()->create([
            'team_name' => 'Al Nassr',
            'logoURL' => 'alnassr.png'
        ]);

        Team::factory()->create([
            'team_name' => 'Barcelona',
            'logoURL' => 'barca.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Bayern Munich',
            'logoURL' => 'bayern.png'
        ]);

        Team::factory()->create([
            'team_name' => 'Girondins de Bordeaux',
            'logoURL' => 'bordeaux.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Borussia Dortmund',
            'logoURL' => 'borussia.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Brescia',
            'logoURL' => 'brescia.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'AS Cannes',
            'logoURL' => 'cannes.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Celtic FC',
            'logoURL' => 'celtic.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Chelsea FC',
            'logoURL' => 'chelsea.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'FC Basel',
            'logoURL' => 'fcbasel.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'KRC Genk',
            'logoURL' => 'genk.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'FC Groningen',
            'logoURL' => 'groningen.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Inter Milan',
            'logoURL' => 'intermilan.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Juventus',
            'logoURL' => 'juve.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Liverpool',
            'logoURL' => 'liverpool.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Manchester City',
            'logoURL' => 'mancity.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Manchester United',
            'logoURL' => 'manu.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'AS Monaco',
            'logoURL' => 'monaco.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Lech Poznań',
            'logoURL' => 'poznan.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Paris Saint-Germain',
            'logoURL' => 'psg.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Real Madrid',
            'logoURL' => 'realmadrid.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'AS Roma',
            'logoURL' => 'roma.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Santos',
            'logoURL' => 'santos.png'
        ]);

        Team::factory()->create([
            'team_name' => 'Southampton FC',
            'logoURL' => 'southampton.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'Sporting CB',
            'logoURL' => 'sportingcb.svg'
        ]);

        Team::factory()->create([
            'team_name' => 'VfL Wolfsburg',
            'logoURL' => 'wolfsburg.svg'
        ]);
    }
}
