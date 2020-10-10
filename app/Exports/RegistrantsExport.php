<?php

namespace App\Exports;

use App\Registrant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrantsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Registrant::orderBy('created_at', 'desc')->paginate();
    }

    public function headings(): array
    {
        return [
            'ID',
            'nama_lengkap', 
            'kelas', 
            'nisn', 
            'sekolah_sebelumnya', 
            'alasan_homeschooling', 
            'no_hp',
            'created_at',
            'updated_at',
        ];
    }
}