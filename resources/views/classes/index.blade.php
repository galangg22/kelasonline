@extends('layouts.app')

@section('content')
    <h2>Daftar Kelas</h2>

    <div class="row">
        @foreach($classes as $class)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $class->name }}</h5>
                        <p class="card-text">{{ $class->description }}</p>
                        <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
