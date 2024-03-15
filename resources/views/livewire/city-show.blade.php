<div>
    <select wire:model="filterDepartment" placeholder="Filter by department">
        <option value="">All Departments</option>
        @foreach ($departments as $department)
            <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
        @endforeach
    </select>
    <input type="text" wire:model="searchCity" placeholder="Search city">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->city_name }}</td>
                    <td>{{ $city->department->department_name }}</td>
                    <td><a href="{{ route('city.show', $city) }}">Details</a></td>
                    <td><a href="{{ route('city.edit', $city) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('city.destroy', $city) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this city?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
