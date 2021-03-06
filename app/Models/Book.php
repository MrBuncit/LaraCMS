<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'amount'];

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
