<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Jetstream\Events\TeamCreated;
use Laravel\Jetstream\Events\TeamDeleted;
use Laravel\Jetstream\Events\TeamUpdated;
use Laravel\Jetstream\Team as JetstreamTeam;

use App\Models\BotServer;
use App\Models\Quote;
use App\Models\Image;

use Cviebrock\EloquentSluggable\Sluggable;

class Team extends JetstreamTeam
{
    use HasFactory;
    use Sluggable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'personal_team' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'personal_team',
        'slug'
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    
    public static function boot() {
        parent::boot();

        static::deleting(function($team) { 
            $team->quotes()->delete();
            $team->images()->delete();
            $team->bot()->delete();

        });
    }

    /**
     * Relationships
     */
    public function bot()
    {
        return $this->hasOne(BotServer::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var guild_id
     */
    public function addBot($guild_id)
    {
        if ($this->bot) {
            // Team Already has Bot on server
            return false;
        }
        if (BotServer::where('guild_id', $guild_id)->where('team_id', null)->first()) {
            // Selected server already has a bot
            return false;
        }

        if ($botServer = BotServer::where('guild_id', $guild_id)->Where('team_id', null)->first()) {
            $botServer->team_id = $this->id;
        } else {
            $botServer = new BotServer;
            $botServer->team_id = $this->id;
            $botServer->guild_id = $guild_id;
        }
        if (!$botServer->save()) {
            return false;
        }
        return true;
    }
}
