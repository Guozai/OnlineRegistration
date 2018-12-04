<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [ 'team_name' ];

    public function registrations() {
        return $this->hasMany('App\Registration');
    }

    public function results() {
        return $this->hasMany('App\Result');
    }
}
