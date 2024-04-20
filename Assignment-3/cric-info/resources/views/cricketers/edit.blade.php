@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">Update Cricketer Info</h1>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('cricketers.update', $cricketer->id) }}" method="post">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ $cricketer->name }}">
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="country" value="{{ $cricketer->country }}">
            </div>
            
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" name="age" aria-describedby="age" value="{{ $cricketer->age }}">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="form-control" id="role" name="role" aria-describedby="role" value="{{ $cricketer->role }}">
            </div>

            <div class="mb-3">
                <label for="matches_played" class="form-label">Matches Played:</label>
                <input type="number" class="form-control" id="matches_played" name="matches_played" aria-describedby="matches_played" value="{{ $cricketer->matches_played }}">
            </div>

            <div class="mb-3">
                <label for="runs_scored" class="form-label">Runs Scored:</label>
                <input type="number" class="form-control" id="runs_scored" name="runs_scored" aria-describedby="runs_scored" value="{{ $cricketer->runs_scored }}">
            </div>

            <div class="mb-3">
                <label for="wickets_taken" class="form-label">Wickets Taken:</label>
                <input type="number" class="form-control" id="wickets_taken" name="wickets_taken" aria-describedby="wickets_taken" value="{{ $cricketer->wickets_taken }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Cricketer</button>
        </form>
    </div>
@endsection
