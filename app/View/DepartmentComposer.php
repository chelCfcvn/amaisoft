<?php

namespace App\View;

use App\Models\Department;
use Illuminate\View\View;
 
class DepartmentComposer
{
    public $departments;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $departmentList = Department::all();
        $this->departments = $departmentList;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('departments', $this->departments);
    }
}
