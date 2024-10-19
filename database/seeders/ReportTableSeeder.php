<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportTableSeeder extends Seeder
{
    public function run()
    {
        $reports = [
            ['name' => 'Laporan Keuangan Januari'],
            ['name' => 'Laporan Keuangan Februari'],
            ['name' => 'Laporan Keuangan Maret'],
            // Tambahkan laporan lain sesuai kebutuhan
        ];

        foreach ($reports as $report) {
            Report::create($report);
        }
    }
}
