<?php

namespace App\Exports;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $books = Book::query();

        if(Auth::user()->hasRole('user')) {
            $books->where('user_id', Auth::id());
        }

        return $books->get();
    }
}
