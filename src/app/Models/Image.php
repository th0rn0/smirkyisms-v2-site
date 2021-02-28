<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'image_by',
        'submitted_by',
        'channel_name',
        'team_id'
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
