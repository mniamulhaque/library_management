<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookSelf extends Model
{
   protected $fillable = [
        'book_cat',
        'accession',
        'titlee',
        'author',
        'subject',
        'place_of_publication',
        'publisher',
        'types',
        'corps',
        'year_of_publication',
        'price',
        'edition',
        'volume',
        'pages',
        'source',
        'location',
        'active',
    ];
}