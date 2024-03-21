<?php

namespace App\Exports;

use App\Models\Registrations;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegistrationExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.registration', [
            'data' => Registrations::all()
        ]);
    }
}
