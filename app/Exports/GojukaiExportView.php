<?php

namespace App\Exports;

use App\Models\Gojukai;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GojukaiExportView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('Gojukai.table', [
            'gojukai' => Gojukai::all()]);
    }
}
