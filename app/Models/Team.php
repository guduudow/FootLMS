<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'logoURL'
    ];

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }
}
