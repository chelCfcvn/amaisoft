<?php

namespace App\Services;


use App\Models\Staff;

class StaffService extends BaseService
{
    public function __construct(Staff $staff)
    {
        $this->model = $staff;
    }
}
