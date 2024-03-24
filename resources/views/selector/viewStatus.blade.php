@extends('layouts.app')
@section('content')
    <h1>View of candidates</h1>
    <article>
        <table>
            <thead>
                <tr>
                    <th>Edit State</th>
                    <th>Name Candidate</th>
                    <th>Candidate Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->username }}</td>
                        <td>
                            @if ($candidate->state)
                                {{ $candidate->state->state_name }}
                            @else
                                No state assigned
                            @endif
                        </td>
                        <td><a class="" href="{{ route('selector.stateEdit', ['user' => $candidate->id]) }}"><img src="img/Edit02.png" width="20px" height="20px"></a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
@endsection
