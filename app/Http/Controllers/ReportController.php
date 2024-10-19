<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ReportUser;

class ReportController extends Controller
{
    // Menampilkan halaman laporan
    public function index()
    {
        $reports = Report::all();
        $uniqueDates = $reports->pluck('created_at')->map(function ($date) {
            return $date->format('d-m-Y'); // Format sesuai yang diinginkan
        })->unique()->sort(); // Mengurutkan tanggal jika diperlukan

        return view('reports.index', compact('reports', 'uniqueDates'));
    }



    // Menampilkan halaman what-if analysis
    public function whatIfAnalysis()
    {
        $analysisResults = DB::table('report_users')
            ->join('reports', 'report_users.report_id', '=', 'reports.id')
            ->select('reports.name as report_name', DB::raw('SUM(report_users.value_adjustment) as total_adjustment'))
            ->groupBy('reports.id', 'reports.name') // Kelompokkan berdasarkan id dan nama laporan
            ->get();

        return view('whatif.analysis', compact('analysisResults'));
    }
}
