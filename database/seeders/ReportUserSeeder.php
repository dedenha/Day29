<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReportUser;

class ReportUserSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data penyesuaian di sini
        ReportUser::create([
            'report_id' => 1, // ID laporan yang sesuai
            'value_adjustment' => 100.00,
        ]);
        ReportUser::create([
            'report_id' => 1,
            'value_adjustment' => 150.50,
        ]);
        ReportUser::create([
            'report_id' => 2, // ID laporan lain
            'value_adjustment' => 300.00,
        ]);
        // Tambahkan data penyesuaian lainnya sesuai kebutuhan
    }
}
