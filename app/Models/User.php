<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

use App\Models\Book;
use App\Models\BorrowLog;
use App\Exceptions\BookException;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\This;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_verified' => 'boolean',
    ];

    public function borrow(Book $book)
    {
        //cek apakah buku ini sedang dipinjam oleh user
        if($this->borrowLogs()->where('book_id',$book->id)->where('is_returned', 0)->count() > 0) {
throw new BookException("Buku $book->title sedang anda pinjam.");
        }
        $borrowLog = BorrowLog::create(['user_id'=>$this->id, 'book_id'=>$book->id]);
        return $borrowLog;
    }

    public function borrowLogs()
    {
        return $this->hasMany('App\Models\BorrowLog');
    }

    public function sendVerification()
    {
        $user = $this;
        $token = str_random(40);
        $user->verification_token = $token;
        $user->save();
        Mail::send('auth.emails.verification', compact('user', 'token'), function ($m) use ($user) {
            $m->to($user->email, $user->name)->subject('Verifikasi Akun Laracms');
        });
    }
}
