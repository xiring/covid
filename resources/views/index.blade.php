@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Cases</h3>
                        <h3 class="card-text">{{ $all_count->cases }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Deaths</h3>
                        <h3 class="card-text">{{ $all_count->deaths }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Recovered</h3>
                        <h3 class="card-text">{{ $all_count->recovered }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="container-fluid table-responsive">
                <table id="data-table-list" class="table table-bordered table-hover table-responsive-lg table-responsive-md table-responsive-md">
                    <thead>
                    <th>S.N</th>
                    <th>Country</th>
                    <th>Total Cases</th>
                    <th>Today Cases</th>
                    <th>Total Deaths</th>
                    <th>Today Deaths</th>
                    <th>Recovered</th>
                    <th>Critical</th>
                    </thead>
                    <tbody>
                    @php $n = 0 @endphp
                    @foreach($countires_data as $data)
                        <tr>
                            <td>{{ ++$n }}</td>
                            <td>{{ $data->country }}</td>
                            <td>{{ $data->cases }}</td>
                            <td>{{ $data->todayCases }}</td>
                            <td>{{ $data->deaths }}</td>
                            <td>{{ $data->todayDeaths }}</td>
                            <td>{{ $data->recovered }}</td>
                            <td>{{ $data->critical }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
