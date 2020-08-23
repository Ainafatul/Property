<?php

namespace App\Exports;

use App\NewsLetterSubscriber;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEmail implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NewsLetterSubscriber::all();
    }
}
