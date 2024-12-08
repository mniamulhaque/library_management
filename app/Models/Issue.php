<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'issue_date',
        'member_id',
        'rank',
        'corps',
        'unite',
        'mobile_no',
        'return_date',
        'book_name',
        'realReturnDate',
    ];


    public function memberDetails()
    {
        return $this->hasOne(member::class,'id','member_id');
    }


    public function bookDetails()
    {
        return $this->hasOne(BookSelf::class,'id','book_name');
    }
}
