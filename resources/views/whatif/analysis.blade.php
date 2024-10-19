@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-white">What-If Analysis</h1>
        <div class="card bg-dark text-white">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Report</th>
                            <th>Total Penyesuaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($analysisResults as $result)
                            <tr>
                                <td>{{ $result->report_name }}</td>
                                <td>{{ number_format($result->total_adjustment, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 3rem;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#analysisTable').DataTable(); // Inisialisasi DataTable
        });
    </script>
@endsection
