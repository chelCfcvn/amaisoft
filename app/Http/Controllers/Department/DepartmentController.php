<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Services\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    protected $departmentService;

    public function __construct(departmentService $departmentService)
    {
        $this->departmentService = $departmentService;
    }
    public function show()
    {
        return view('departments.show');
    }
    public function showCreate()
    {
        return view('departments.create');
    }
    public function showEdit(department $department)
    {
        return view('departments.update', compact('department'));
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $this->departmentService->create($data);
        return redirect()->route('department.show');
    }
    public function update(Department $department, Request $request)
    {
        $data = $request->all();
        $this->departmentService->update($department, $data);
        return redirect()->route('department.show');
    }
    public function delete(Department $department)
    {
        $this->departmentService->delete($department);
        return redirect()->route('department.show');
    }
}
