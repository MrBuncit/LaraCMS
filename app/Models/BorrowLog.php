<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class BorrowLog extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'user_id', 'is_returned'];
    protected $casts = [
        'is_returned' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }

    public function scopeReturned($query)
    {
        return $query->where('is_returned', 1);
    }

    public function scopeBorrowed($query)
    {
        return $query->where('is_returned', 0);
    }
}
