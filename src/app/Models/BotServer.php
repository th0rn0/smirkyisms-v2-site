<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotServer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id',
        'guild_id',
        'token',
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function setToken($token)
    {
        $this->token = $token;
        $this->save();
        return true;
    }
}
