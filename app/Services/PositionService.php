<?php

namespace App\Services;

use App\Models\Position;

class PositionService extends BaseService
{
    public function __construct(Position $position)
    {
        $this->model = $position;
    }
}
