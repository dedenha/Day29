<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportsTableSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan 15 data laporan
        $reports = [
            [
                'name' => 'Laporan Keuangan Januari',
                'description' => 'Laporan keuangan bulan Januari 2023.',
            ],
            [
                'name' => 'Laporan Keuangan Februari',
                'description' => 'Laporan keuangan bulan Februari 2023.',
            ],
            [
                'name' => 'Laporan Keuangan Maret',
                'description' => 'Laporan keuangan bulan Maret 2023.',
            ],
            [
                'name' => 'Laporan Penjualan Q1',
                'description' => 'Laporan penjualan kuartal pertama 2023.',
            ],
            [
                'name' => 'Laporan Penjualan Q2',
                'description' => 'Laporan penjualan kuartal kedua 2023.',
            ],
            [
                'name' => 'Laporan Kinerja Bulanan',
                'description' => 'Laporan kinerja bulanan untuk semua departemen.',
            ],
            [
                'name' => 'Laporan Audit Internal',
                'description' => 'Laporan hasil audit internal tahun 2022.',
            ],
            [
                'name' => 'Laporan Proyek A',
                'description' => 'Laporan perkembangan proyek A sampai bulan Maret 2023.',
            ],
            [
                'name' => 'Laporan Proyek B',
                'description' => 'Laporan perkembangan proyek B sampai bulan Maret 2023.',
            ],
            [
                'name' => 'Laporan Evaluasi Tahunan',
                'description' => 'Evaluasi tahunan untuk seluruh perusahaan.',
            ],
            [
                'name' => 'Laporan Pengeluaran',
                'description' => 'Laporan pengeluaran perusahaan per bulan.',
            ],
            [
                'name' => 'Laporan Pembayaran',
                'description' => 'Laporan pembayaran dari klien per bulan.',
            ],
            [
                'name' => 'Laporan Pemasaran',
                'description' => 'Laporan kegiatan pemasaran selama tahun 2022.',
            ],
            [
                'name' => 'Laporan Pengembangan Produk',
                'description' => 'Laporan pengembangan produk baru.',
            ],
            [
                'name' => 'Laporan Tren Pasar',
                'description' => 'Laporan tren pasar untuk produk yang ada.',
            ],
            [
                'name' => 'Laporan Risiko',
                'description' => 'Laporan analisis risiko untuk tahun 2023.',
            ],
        ];

        foreach ($reports as $report) {
            Report::create($report);
        }
    }
}
