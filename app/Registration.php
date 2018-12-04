<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [ 'contact_name', 'contact_number', 'member1_id', 'member2_id', 'member3_id',
        'member4_id', 'member5_id', 'member6_id', 'member7_id' ];

    public function team() {
        return $this->belongsTo(Team::class);
    }
}
