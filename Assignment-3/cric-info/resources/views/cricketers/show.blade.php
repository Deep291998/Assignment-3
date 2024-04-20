@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Cricketer Profile</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $cricketer->name }} - {{ $cricketer->country }}</h5>
                    <p>Age: {{ $cricketer->age }} - Role: {{ $cricketer->role }}</p>
                    <a href="{{ route('cricketers.show', $cricketer->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('cricketers.edit', $cricketer->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('cricketers.trash', $cricketer->id) }}" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
