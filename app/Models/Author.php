<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function books() {
        return $this->hasMany('App\Models\Book');
    }

    public static function boot() {
        parent::boot(); //melakukan hook ke event deleting

        self::deleting(function($author) {
            //mengecek apakah penulis masih punya buku
            if ($author->books->count() >0) {
                //menyiapkan pesan error
                $html = 'Penulis tidak bisa dihapus karena masih memiliki buku : ';
                $html .= '<ul>';
                foreach($author->books as $book) {
                    $html .= "<li>$book->title</li>";
                }
                $html .= '</ul>';

                Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>$html
                ]);

                //membatalkan proses penghapusan
                return false;
            }
        });
    }
}
