@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Candidate state</h1>
        <form method="POST" action="{{ route('selector.stateEdit.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="state_id">Candidate State:</label>
                <select name="state_id" class="form-control"> <!-- Cambio de "candidate_id" a "state_id" -->
                    @foreach ($states as $state) <!-- Cambio de $users a $states -->
                        <option value="{{ $state->id }}" {{ $state->id == $user->state_id ? 'selected' : '' }}>
                            {{ $state->state_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update state</button>
        </form>
    </div>
@endsection
