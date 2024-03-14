<div>

    <select wire:model="searchOccupation" placeholder="filter by post">
        <option value="">All posts</option>
        @foreach ($occupations as $occupation)
            <option value="{{$occupation->occupation_name}}">{{$occupation->occupation_name}}</option>
        @endforeach
    </select>

    {{-- input para buscar ocupaciones por su nombre hecho con livewire --}}
    <input type="text" wire:model="searchOccupation" placeholder="Search for occupation name">

    <ul class="list-general">
        @forelse ($occupations as $occupation)
        <table class="table-general">
            <tr>
                <th class="table-header">ID</th>
                <th class="table-header">Occupation Name</th>
                <th class="table-header">Occupation Description</th>
                <th class="table-header">Id Post</th>
            </tr>
            <tr>
                <td><a>{{ $occupation->id }}</a></td>
                <td><a>{{ $occupation->occupation_name }}</a></td>
                <td><a>{{ $occupation->occupation_description}}</a></td>
                <td><a>{{ $occupation->id_post }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.occupation', $occupation->id) }}" class="link">{{ $occupation->id }}</a> |
            <a href="{{ route('edit.occupation', $occupation->id) }}" class="boton1">EDIT</a> |
            <form method="POST" action="{{ route('destroy.occupation', ['occupation'=>$occupation->id]) }}" class="delete-form">
                @csrf
                @method('DELETE')
                <input type="submit" value='DELETE' class="boton1">
            </form>
        </li>
        @empty
        <p class="no-data">No data.</p>
        @endforelse
    </ul>
</div>
