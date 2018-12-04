<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [ 'round1_score', 'round2_score', 'round3_score', 'round4_score' ];

    public function team() {
        return $this->belongsTo(Team::class);
    }
}
