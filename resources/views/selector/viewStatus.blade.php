@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Selectors/viewStatus.css') }}">

<br><br>
<div class="container">
    <h1 class="TituloManage">View of candidates</h1><br>
    <h2 class="TituloManage2">Edit State</h2><br>
    
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
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
    </div>
</div>
@endsection
