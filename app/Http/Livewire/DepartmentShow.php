<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;

class DepartmentShow extends Component
{
    public $searchDepartment = '';
    public function render()
    {
        $departments = Department::query();
        if ($this->searchDepartment) {
            $departments->where('department_name', 'like', '%' . $this->searchDepartment . '%');
        }
        $departments = $departments->paginate(10);
        return view('livewire.department-show', [
            'departments' => $departments
        ]);
    }
}
