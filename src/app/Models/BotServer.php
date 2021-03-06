<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
    ];

    public static function boot() {
        parent::boot();

        static::creating(function($team) { 
            $team->token = $team->generateToken();
        });
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function setToken($token)
    {
        $this->token = $token;
        $this->save();
    }

    public function generateToken()
    {
        $token = Str::random(60);
        return hash('sha256', $token);
    }

    public function setConfirmed()
    {
        $this->confirmed = true;
        $this->save();
    }
}
