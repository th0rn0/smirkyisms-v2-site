<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Jetstream\Events\TeamCreated;
use Laravel\Jetstream\Events\TeamDeleted;
use Laravel\Jetstream\Events\TeamUpdated;
use Laravel\Jetstream\Team as JetstreamTeam;

use App\Models\BotServer;

class Team extends JetstreamTeam
{
    use HasFactory;

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

    public function bot()
    {
        return $this->hasOne(BotServer::class);
    }

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
