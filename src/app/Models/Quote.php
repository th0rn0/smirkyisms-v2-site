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
        'submitted_by',
        'channel_name',
        'team_id'
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
