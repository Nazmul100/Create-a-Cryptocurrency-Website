@extends('layouts.main')

@section('content')

    <div class="container-lg" style="margin:auto" >
        <div class="row">



            @foreach( $response ['rates'] as  $value )
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $response ['target'] }}</h5>
{{--                            <p class="card-text"> {{ $response ['timestamp'] }}</p>--}}
                            <p class="card-text">Rates: {{ $value }}</p>

{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>
            @endforeach

    </div>

@endsection
