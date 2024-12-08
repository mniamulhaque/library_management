<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
   protected $fillable = [
        'rank',
        'address',
        'rank_no',
        'name',
        'corps',
        'appointment',
        'unite',
        'mobile_no',
    ];

    public function issueDetails()
    {
        return $this->hasMany(Issue::class,'member_id','id');
    }
}
