<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text',
        'quote_by',
        'quote_by_id',
        'submitted_by',
        'submitted_by_id',
        'channel_name',
        'channel_id',
        'team_id',
        'guild_name',
        'guild_id'
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
