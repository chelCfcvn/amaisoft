<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use App\Services\StaffService;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $staffService;

    public function __construct(StaffService $staffService)
    {
        $this->staffService = $staffService;
    }
    public function showCreate()
    {
        return view('staffs.create');
    }
    public function showEdit(Staff $staff)
    {
        return view('staffs.edit', compact('staff'));
    }
    public function create(StaffRequest $request)
    {
        $data = $request->all();
        $this->staffService->create($data);
        return redirect()->route('dashboard');

    }
    public function update(Staff $staff, Request $request)
    {
        $data = $request->all();
        $this->staffService->update($staff, $data);
        return redirect()->route('dashboard');
    }
    public function delete(Staff $staff)
    {
        $this->staffService->delete($staff);
        return redirect()->route('dashboard');
    }

}
