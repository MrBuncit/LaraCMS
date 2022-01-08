<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Facades\DataTables;
use App\Models\BorrowLog;


class StatisticsController extends Controller
{
    //
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $stats = BorrowLog::with('book','user');
            if ($request->get('status') == 'returned') $stats->returned();
            if ($request->get('status') == 'not-returned') $stats->borrowed();

            return Datatables::of($stats)
            ->addColumn('returned_at', function($stats){
                if ($stats->is_returned) {
                    return $stats->update_at;
                }
                return "Masih dipinjam";
            })->make(true);
        }
        $html = $htmlBuilder
            ->addColumn(['data' => 'book.title', 'name'=>'book.title', 'title'=>'Judul'])
            ->addColumn(['data' => 'user.name', 'name'=>'user.name', 'title'=>'Peminjam'])
            ->addColumn(['data' => 'created_at', 'name'=>'created_at', 'title'=>'Tanggal Pinjam', 'searchable'=>false])
            ->addColumn(['data' => 'returned_at', 'name'=>'returned_at', 'title'=>'Tanggal Pinjam', 'searchable'=>false]);

        return view('statistics.index')->with(compact('html'));
    }
}
