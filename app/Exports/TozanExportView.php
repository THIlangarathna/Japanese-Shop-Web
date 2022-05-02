<?php

namespace App\Exports;

use App\Models\Tozan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TozanExportView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('Tozan.table', [
            'tozan' => Tozan::all()]);
    }
}
