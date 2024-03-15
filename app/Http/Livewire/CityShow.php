<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Department;
use Livewire\Component;

class CityShow extends Component
{
    public $searchCity = '';
    public $filterDepartment = '';

    public function render()
    {
        $cities = City::query();

        if ($this->searchCity) {
            $cities->where('city_name', 'like', '%' . $this->searchCity . '%');
        }

        if ($this->filterDepartment) {
            $cities->whereHas('department', function ($query) {
                $query->where('department_name', $this->filterDepartment);
            });
        }

        $cities = $cities->get();
        $departments = Department::all();

        return view('livewire.city-show', [
            'cities' => $cities,
            'departments' => $departments,
        ]);
    }
}
