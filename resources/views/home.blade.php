@extends('layouts.app')

@section('page-title')
    Train Migration
@endsection

@section('content')
    <div>
        @foreach ($trains as $train)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $train->company }}</h5>
                    <h5 class="card-title">Stazione di Partenza: {{ $train->departures_station }}</h5>
                    <h5 class="card-title">Stazione di Arrivo: {{ $train->arrival_station }}</h5>
                    <h5 class="card-title">{{ $train->train_code }}</h5>
                    <h5 class="card-title">{{ $train->cabin_number }}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection
