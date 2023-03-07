<?php

namespace App\Services;

use App\Models\Department;

class DepartmentService extends BaseService
{
    public function __construct(Department $position)
    {
        $this->model = $position;
    }
}
