<?php

namespace App\Exports;

use App\Models\Gohonzon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GohonzonExportView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('Gohonzon.table', [
            'gohonzon' => Gohonzon::all()]);
    }
}

