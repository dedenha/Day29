@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-white">Laporan <i class="fas fa-file-alt"></i></h1>

        <!-- Executive Summary -->
        <div class="alert alert-info" id="executiveSummary">
            <strong>Executive Summary:</strong>
            <p>Total Laporan: {{ $reports->count() }}</p>
            <p>Tanggal Terakhir Diperbarui: {{ $reports->max('created_at')->format('d-m-Y') }}</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-3">
            <label for="dateFilter" class="text-white">Filter berdasarkan Tanggal:</label>
            <select id="dateFilter" class="form-select" aria-label="Filter berdasarkan Tanggal">
                <option value="">Semua Tanggal</option>
                @foreach ($uniqueDates as $date)
                    <option value="{{ $date }}">{{ $date }}</option>
                @endforeach
            </select>
        </div>

        <div class="card bg-dark text-white">
            <div class="card-body">
                <table id="reportTable" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Nama Laporan</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->name }}</td>
                                <td>{{ $report->description }}</td>
                                <td>{{ $report->created_at->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $('#reportTable').DataTable(); // Inisialisasi DataTable

            // Filter berdasarkan tanggal
            $('#dateFilter').on('change', function() {
                var selectedDate = $(this).val();
                table.column(2).search(selectedDate ? '^' + selectedDate + '$' : '', true, false).draw();
            });
        });
    </script>
@endsection
