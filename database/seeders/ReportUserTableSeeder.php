<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\ReportUser; // Model untuk tabel report_users
use App\Models\Report; // Model untuk tabel reports (jika diperlukan)

class ReportUserTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        $data = [
            ['report_id' => 1, 'value_adjustment' => 100.00],
            ['report_id' => 1, 'value_adjustment' => 150.50],
            ['report_id' => 1, 'value_adjustment' => 200.00],



        ];

        foreach ($data as $item) {
            ReportUser::create($item);
        }
    }
}
